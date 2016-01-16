<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        return view('home');
    }

    public function setup(Request $request){
        $user = Auth::user();
        if($user){
          $user->skype_username = $request->skype;
          $user->google_username = $request->google;
          $user->facetime_username = $request->facetime;
          $user->year = $request->year;
          $user->highschool = $request->highschool;
          $user->major = $request->major;
          $user->setup = true;
          $user->save();

          return redirect('dashboard');
        }
    }
}
