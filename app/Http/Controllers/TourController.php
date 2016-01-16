<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\College;
use App\User;
use App\Tour;
use Illuminate\Support\Facades\Auth;


class TourController extends Controller
{
    //
    public function make_college(){
      $college = new College;
      $college->id = 1;
      $college->name = "University of Chicago";
      $college->population = "14467";
      $college->active = true;
      $college->cover = "uchicago.png";
      $college->location ="Chicago, IL";
      $college->save();
    }

    public function show_colleges(){
      $colleges = College::all();
      var_dump($colleges);
      print "<br><br>";
      foreach($colleges as $college){
        print $college->id . "::" . $college->name;
      }
    }

    public function book($id){
      $college = College::find($id);
      return view('book.book')->with(['college' => $college]);
    }

    public function request(Request $request){

      $tour = new Tour;
      $tour->college = $request->id;
      $tour->prospie = Auth::user()->id;
      $tour->lookingfor = $request->lookingfor;
      $tour->when = $request->when;
      $tour->programs = $request->programs;
      $tour->matters = $request->matters;
      $tour->save();


      print $tour->all();
    }
}
