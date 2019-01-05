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

Route::get('/daftar_masjid', function () {
    return view('daftar_masjid');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/event', function () {
    return view('event');
});

Route::get('/profile_masjid_mrb', function () {
    return view('profile_masjid_mrb');
});

Route::get('/profile_masjid_pusdai', function () {
    return view('profile_masjid_pusdai');
});

Route::get('/profile_masjid_tsb', function () {
    return view('profile_masjid_tsb');
});

Route::get('/event_masjid_mrb', function () {
    return view('event_masjid_mrb');
});

Route::get('/event_masjid_pusdai', function () {
    return view('event_masjid_pusdai');
});

Route::get('/event_masjid_tsb', function () {
    return view('event_masjid_tsb');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// ROUTES ADMIN
Route::group(['middleware' => 'check-permission:admin'], function () {
    Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
    });
});
 
 
// ROUTES PENDAFTAR
Route::group(['middleware' => 'check-permission:pendaftar'], function () {
    Route::group(['prefix' => 'pendaftar'], function () {
    Route::get('/dashboard', 'PendaftarController@index')->name('pendaftar.dashboard');
 
    });
});
