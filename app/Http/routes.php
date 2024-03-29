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


//Route::get('login', ['uses' => 'LoginController@login', 'as' => 'login']);
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




Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('home', array('as' => 'home', 'uses' => function(){
    return view('home');
}));

//    Route::get('/home', 'HomeController@index');

    Route::get('auth/{social}', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/{social}/callback', 'Auth\AuthController@handleProviderCallback');


});
