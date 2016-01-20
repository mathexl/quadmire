<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\College;
use App\User;
use App\Tour;
use Illuminate\Support\Facades\Auth;
use DB;

class TourController extends Controller
{
    //
    public function make_college(){

      College::truncate();

      /* UCHICAGO **************/
      $college = new College;
      $college->id = 1;
      $college->name = "University of Chicago";
      $college->population = "14467";
      $college->active = true;
      $college->cover = "uchicago.png";
      $college->location ="Chicago, IL";
      $college->email = "uchicago.edu";
      $college->save();
      /************************/

      /* COLUMBIA **************/
      $college = new College;
      $college->id = 2;
      $college->name = "Columbia University";
      $college->population = "6170";
      $college->active = true;
      $college->cover = "columbia.png";
      $college->location ="New York City, NY";
      $college->email = "columbia.edu";
      $college->save();
      /************************/


      $colleges = College::all();
      var_dump($colleges);
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

    public function delete($id){
      $tour = Tour::find($id);
      $tour->delete();
      return $tour;
    }

    public function tour($id){
      $tour = Tour::find($id);
      $user = Auth::user();
      if($tour->prospie != $user->id && $tour->designee != $user->id){
        return view('error.404');
      }
      $college = College::find($tour->college);
      return view('tour')->with(['tour' => $tour, 'user' => $user, 'college' => $college]);
    }

    public function delegate($id){
      $user = Auth::user();
      if($user->admin != true){
        return view('error.404');
      }

      $college = College::find($id);
      $hosts = DB::table('users')
            ->join('passports', 'passports.id', '=', 'users.passport')
            ->where('passports.college', '=', $college->id)
            ->select('users.*')
            ->distinct()->get();

      $tours = DB::table('tours')
            ->join('colleges', 'colleges.id', '=', 'tours.college')
            ->join('users', 'users.id', '=', 'tours.prospie')
            ->select('tours.*','colleges.cover', 'colleges.population','users.name','users.email',
            'users.skype_username','users.facetime_username','users.google_username')
            ->where('tours.college', '=', $college->id)
            ->distinct()->get();

      return view('delegate')->with(['college' => $college, 'hosts' => $hosts, 'tours' => $tours]);
    }

    public function delegatetour(Request $request, $tour){
      $user = Auth::user();
      if($user->admin != true){
        return view('error.404');
      }

      $tour = Tour::find($tour);
      $host = $request->id;
      $host = User::find($host);

      $tour->designee = $host->id;
      $tour->save();



      return "Designated: " . $host->id . " to " . $tour->id;
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

      return redirect('/upcoming');
    }

    public function upcoming(){
      $user = Auth::user();
      if($user->passport == 0){
        $tours = DB::table('tours')
              ->join('colleges', 'colleges.id', '=', 'tours.college')
              ->select('tours.*', 'colleges.name','colleges.cover', 'colleges.population')
              ->where('tours.prospie', '=', Auth::user()->id)
              ->distinct()->get();
      } else {
        $tours = Tour::all();

        $tours = DB::table('tours')
              ->join('users', 'users.id', '=', 'tours.prospie')
              ->select('tours.*', 'users.name','users.highschool', 'users.year', 'users.major')
              ->where('tours.designee', '=', (string) $user->id)
              ->get();
      }

      return view('upcoming')->with(['tours' => $tours,'user' => $user]);
    }
}
