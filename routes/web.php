<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});



Route::prefix('admin')->group(function(){


  Route::get('/register', function () {
      return redirect('/admin/login');
  });
  Auth::routes();

  Route::group(['middleware' => 'auth'], function(){

    Route::resource('perlombaan', 'LombaController');

    Route::get('/dashboard', 'HomeController@index')->name('home');
  });


});
