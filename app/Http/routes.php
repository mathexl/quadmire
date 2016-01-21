<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/





Route::get('/logout', 'Auth\AuthController@getLogout');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        if(!Auth::check()){
          return view('welcome');
        } else {
          return redirect('/dashboard');
        }
    });




    //
    // Authentication routes...
    Route::get('/login', 'Auth\AuthController@getLogin');
    Route::post('/login', 'Auth\AuthController@postLogin');
    Route::get('/logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('/register', 'Auth\AuthController@getRegister');
    Route::post('/register', 'Auth\AuthController@postRegister');

    Route::get('/workwithus', 'ExternalController@workWithUs');
    Route::get('/termsandservice', 'ExternalController@termsAndService');
    Route::get('/colleges', 'ExternalController@currentColleges');
    Route::get('/howtobecomeahost', 'ExternalController@howToBecomeAHost');
    Route::get('/contactus', 'ExternalController@contact');

});




Route::group(['middleware' => 'web'], function () {

    Route::auth();
    Route::get('/dashboard', 'HomeController@index');
    Route::post('/setup', 'HomeController@setup');
    Route::get('/add_colleges', 'TourController@make_college');
    Route::get('/show_colleges', 'TourController@show_colleges');
    Route::get('/book/{id}', 'TourController@book');
    Route::post('/book', 'TourController@request');
    Route::get('/upcoming', 'TourController@upcoming');
    Route::get('/tour/delete/{id}', 'TourController@delete');
    Route::get('/tour/{id}', 'TourController@tour');
    Route::get('/delegate/{id}', 'TourController@delegate');
    Route::post('/delegate/{tour}', 'TourController@delegatetour');
    Route::get('/get_access', 'HomeController@get_access');
    Route::get('/settings', 'HomeController@settings');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
