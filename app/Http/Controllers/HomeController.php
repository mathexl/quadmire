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

    public function setup(Request $request){
        $user = Auth::user();
        if($user){
          $user->skype_username = $request->skype;
          $user->google_username = $request->google;
          $user->facetime_username = $request->facetime;
          $user->year = $request->year;
          if($user->highschool){
            $user->highschool = $request->highschool;
          } else {
            $user->clubs = $request->clubs;
          }
          $user->major = $request->major;
          $user->setup = true;
          $user->save();


          //** creation of a passport ***/
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
          $user->save();
          //* end creation of passport **/


          return redirect('dashboard');
        }
    }


}
