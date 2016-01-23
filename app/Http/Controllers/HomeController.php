<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\College;
use App\Passport;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;

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

    public function edit(Request $request){
      \Cloudinary::config(array(
          "cloud_name" => "uprospie",
          "api_key" => "348123498328427",
          "api_secret" => "5_vRehNihN3R2RnTHUtAHuUhe-E",
          "secure" => false //make true when you install ssh
      ));
      $hash = md5(time() . mt_rand()) . '.jpg';

      $user = Auth::user();

      if($request->image){
        copy($request->image,"assets/images/" . $hash);
        $upload = \Cloudinary\Uploader::upload("assets/images/" . $hash);
        $user->prof = $upload['url'];
      }

      $user->skype_username = $request->skype;
      $user->google_username = $request->google;
      $user->facetime_username = $request->facetime;
      $user->year = $request->year;
      if($request->highschool){
        $user->highschool = $request->highschool;
      } else {
        $user->clubs = $request->clubs;
      }
      $user->major = $request->major;
      $user->save();

      return redirect('/settings');
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
