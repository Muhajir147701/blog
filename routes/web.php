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
    return view('pi2');
});
// beranda######################################################
Route::get('/informasi', 'InfoController@index');

Route::get('/info', function () {
    return view('beranda.informasi');
    
});
Route::get('/jadwal', function () {
    return view('beranda.jadwal');
});
Route::get('/mading', function () {
    return view('beranda.mading');
});
Route::get('/psb', function () {
    return view('beranda.psb');
});
Route::get('/pustaka', function () {
    return view('beranda.pustaka');
});
Route::get('/tendik', function () {
    return view('beranda.tendik');
});



//berandda##########################################################

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');