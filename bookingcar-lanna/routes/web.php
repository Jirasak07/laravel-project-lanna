<?php

use Illuminate\Support\Facades\Auth;
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
    return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('users/dashboard',[\App\Http\Controllers\fontend\UserController::class,'index'])->name('user.dashboard');
Route::get('users/booking-status', [App\Http\Controllers\fontend\UserController::class, 'viewBookingStatus'])->name('user-booking-status');
Route::get('users/history-booking', [\App\Http\Controllers\fontend\UserController::class, 'viewHistory'])->name('user-history');


Route::get('admin/dashboard',[App\Http\Controllers\fontend\AdminController::class,'index'])->name('admin.dashboard');