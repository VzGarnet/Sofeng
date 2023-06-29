<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/cekorder', function () {
    return view('cekorder1');
});

Route::get('/', function () {
    return view('home-page');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/forgot-pass', function() {
    return view('forgot-pass');
});

Route::get('/home-page', function(){
    return view('home-page');
});

Route::get('/search', function() {
    return view('search');
});

Route::get('/about', function() {
    return view('about');
});

Route::get('/cekorder1', function() {
    return view('cekorder2');
});

Route::get('/schedule', function() {
    return view('schedule');
});

Route::get('/promo', function() {
    return view('promo');
});

Route::get('/gerbong', function() {
    return view('gerbong');
});

Route::get('/booking', function() {
    return view('booking');
});

Route::get('/banner1', function() {
    return view('banner1');
});

Route::get('/test', function() {
    return view('test');
});

Route::get('/banner2', function() {
    return view('banner2');
});

Route::post('/process-form', 'App\Http\Controllers\SortController@processForm')->name('process-form');

Route::post('/cari-tiket', 'App\Http\Controllers\SortController@cariTiket')->name('cari-tiket');

Route::post('/proses-tiket', 'App\Http\Controllers\SortController@prosesTiket')->name('proses-tiket');
