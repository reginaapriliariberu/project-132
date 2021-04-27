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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = "Regina Aprilia";
//     return view('about', ['nama' => $nama]);
// });

// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });

// // memanggil menggunakan string
// Route::get('/stringsaya', function () {
//     return 'Hello World';
// });

// Route::get('/halamanindex', function () {
//     return view('index');
// });


Route::get('/', function () {
    return view('welcome');
});


Route::get('/ujian', 'UjianController@index');

Route::get('/ujian/indexSeluruh', 'UjianController@indexSeluruh');

Route::get('/ujian/create', 'UjianController@create');

Route::get('/ujian/{ujian}', 'UjianController@show');

Route::post('/ujian', 'UjianController@store');

Route::delete('/ujian/{ujian}', 'UjianController@destroy');

Route::get('/ujian/{ujian}/edit', 'UjianController@edit');

Route::patch('/ujian/{ujian}', 'UjianController@update');
