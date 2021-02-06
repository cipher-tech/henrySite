<?php

use Illuminate\Support\Facades\Route;

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
})->name("index");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/account-types', function () {
    return view('account-types');
})->name("account-types");

Route::get('/faq', function () {
    return view('faq');
})->name("faq");

Route::get('/terms', function () {
    return view('terms');
})->name("terms");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get('/register', function () {
    return view('register');
})->name("register");
