<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/views/{name}', function($name) {
  $view_path = 'app.' . $name;

  if (View::exists($view_path)) {
    return View::make($view_path);
  }

  App::abort(404);
});

Route::get('/api/v1/employees/{id?}', 'Account@index');
Route::post('/api/v1/employees', 'Account@store');
Route::post('/api/v1/employees/{id}', 'Account@update');
Route::delete('/api/v1/employees/{id}', 'Account@destroy');


