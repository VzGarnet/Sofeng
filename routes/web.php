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


Route::get('/payment', function () {
    return view('payment');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/cekorder', function () {
    return view('cekorder1');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/forgot-pass', function() {
    return view('forgot-pass');
});

Route::get('/home', function(){
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

Route::post('/register', 'App\Http\Controllers\FormController@processForm')->name('register');

Route::post('/process-form', 'App\Http\Controllers\SortController@processForm')->name('process-form');

