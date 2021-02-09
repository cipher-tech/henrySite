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


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/index', function () {
        return view('dashboard.dashboard');
    })->name("dashboard");
    
    Route::get('/dashboard/fund', function () {
        return view('dashboard.fund');
    })->name("dashboard");

    Route::get('/profile', function () {
        return view('dashboard.profile');
    })->name("dashboard");

    Route::get('/trade-history', function () {
        return view('dashboard.trade-history');
    })->name("dashboard");

    Route::get('/withdraw', function () {
        return view('dashboard.withdraw');
    })->name("dashboard");
});
