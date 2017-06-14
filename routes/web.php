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
    return view('welcome');
});

Route::get('testmodel', function () {
	$q = App\Post::all();
    return $q;
});

Route::get('produk', function () {
	$a = App\produk::all();
    return $a;
});
    Route::get('pengguna', function () {
	$b = App\pengguna::all();
    return $b;
});
    Route::get('penggaturan', function () {
	$c = App\penggaturan::all();
    return $c;

 });
    Route::get('semuanya', function () {
	$a = App\produk::all();
	$b = App\pengguna::all();
	$c = App\penggaturan::all();
    return $a.$b.$c;
 });

    Route::get('/test','MyController@percobaan');
     Route::get('/test2','MyController@percobaan2');
      Route::get('/test3','MyController@percobaan3');
      Route::get('/test4','MyController@percobaan4');
       Route::get('/test5','MyController@percobaan5');
       Route::get('/test6','MyController@percobaan6');
        Route::get('loop/{data1?}/{data2?}','MyController@param');
        Route::get('/coba/{siswa}','siswaController@show');
