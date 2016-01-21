<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\College;
use App\Passport;

class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if(!strpos($user->email,".edu")){
          return view('home');
        } else {
          $colleges = College::all();
          foreach($colleges as $college){
            if(strpos($user->email,$college->email)){
              $passport = Passport::find($user->passport);
              return view('hostboard')->with(["college"=>$college,"passport"=>$passport]);
            }
          }
          return view('partials.comingsoon');
        }
    }

    public function settings(){
      $user = Auth::user();
      return view('settings')->with(["user" => $user]);
    }

    public function setup(Request $request){
        $user = Auth::user();
        if($user){
          $user->skype_username = $request->skype;
          $user->google_username = $request->google;
          $user->facetime_username = $request->facetime;
          $user->year = $request->year;
          if($request->highschool){
            $user->highschool = $request->highschool;
          } else {
            $user->clubs = $request->clubs;
            $passport = new Passport;
            $passport->host = $user->id;
            $colleges = College::all();
            foreach($colleges as $college){
              if(strpos($user->email,$college->email)){
                $passport->college = $college->id;
              }
            }
            $passport->numberoforders = 0;
            $passport->save();

            $user->passport = $passport->id;
          }
          $user->major = $request->major;
          $user->setup = true;
          $user->save();



          return redirect('dashboard');
        }
    }

    public function get_access(){
      $admins = ["mathexl@gmail.com","mdp2163@columbia.edu"];
      $user = Auth::user();
      if(in_array($user->email,$admins)){
        $user->admin = true;
        $user->save();
        print "admin_access_granted";
      } else {
        return view('error.404');
      }
    }


}
