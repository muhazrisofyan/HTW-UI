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

Route::get('/gallery', function() {
    return view('pages.gallery');
});

Route::prefix('lomba')->group(function(){
    Route::get('/internasional',function(){
      return view('pages.internasional');
    });
    Route::get('/nasional',function(){
      return view('pages.nasional');
    });
    Route::get('/internasional/sbt',function(){
      return view('pages.sbt');
    });
    Route::get('/internasional/hydros',function(){
      return view('pages.hydros');
    });
    Route::get('/nasional/alpha',function(){
      return view('nasional.alpha');
    });
    Route::get('/nasional/arafuru',function(){
      return view('nasional.arafuru');
    });
    Route::get('/nasional/baby',function(){
      return view('nasional.baby');
    });
    Route::get('/nasional/kria',function(){
      return view('nasional.kria');
    });
    Route::get('/nasional/leviathan',function(){
      return view('nasional.leviathan');
    });
    Route::get('/nasional/poseidon',function(){
      return view('nasional.poseidon');
    });
    Route::get('/nasional/rocky',function(){
      return view('nasional.rocky');
    });
    Route::get('/nasional/vmax',function(){
      return view('nasional.vmax');
    });
});

Route::prefix('gallery')->group(function(){
  Route::get('/category',function(){
    return view('gallery.category');
  });
  Route::get('/2018/kegiatan',function(){
    return view('gallery.2018kegiatan');
  });
  Route::get('/2018/lomba',function(){
    return view('gallery.2018lomba');
  });
});

Route::prefix('post')->group(function(){
  Route::get('/1', function(){
    return view('posts.post1');
  });
  Route::get('/2', function(){
    return view('posts.post2');
  });
  Route::get('/3', function(){
    return view('posts.post3');
  });
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
