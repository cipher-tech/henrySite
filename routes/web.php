<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name("forgot-password");

// Route::get('/register', function () {
//     return view('register');
// })->name("register");


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); 

Route::group(['prefix' => 'dashboard', "middleware" => "auth:sanctum"], function () {
    Route::get('/', [UserController::class, "index"])->name("dashboard");

    Route::get('/fund', [UserController::class, "deposit"])->name("fund");
    Route::post('/fund', [UserController::class, "storeDeposit"])->name("saveFund");
    
    Route::get('/profile', [UserController::class, "profile"])->name("profile");
    
    // Route::get('/trade-history', function () {
    //     return view('dashboard.trade-history');
    // })->name("trade-history");

    Route::get('/withdraw', [UserController::class, "withdrawal"])->name("withdraw");
    Route::post('/withdraw', [UserController::class, "storeWithdrawal"])->name("saveWithdrawal");

    Route::get('/user/profile', function () {
        return view('profile.show');
    })->name("userProfile");
});

Route::group(['prefix' => 'admin', "middleware" => "isAdmin"], function () {
    Route::get('/', [AdminController::class, "index"])->name("adminDashboard");
 
    Route::get('/deposits', [AdminController::class, "getDeposits"])->name("adminFund");
    
    Route::get('/viewUser/{id}', [AdminController::class, "viewUser"])->name("viewUser");
    Route::post('/viewUser/{id}', [AdminController::class, "storeUser"]);
    
    // Route::get('/trade-history', function () {
    //     return view('admin.trade-history');
    // })->name("adminHistory");

    Route::get('/withdraw', [AdminController::class, "getWithdrawals"])->name("adminWithdrawal");
});


