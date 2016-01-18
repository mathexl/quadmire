<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExternalController extends Controller
{
    //
    public function workWithUs()
    {
      return view('external.workwithus');
    }

    public function termsAndService(){
      return view('external.termsandservice');
    }

    public function currentColleges(){
      return view('external.currentcolleges');
    }

    public function howToBecomeAHost(){
      return view('external.howtobecomeahost');
    }

    public function contact(){
      return view('external.contact');
    }
}
