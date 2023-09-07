<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BookingHomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RecordController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('pages.login', function () {
    return view('pages.login');
})->name('pages.login');


// การส่งเข้า Controller
Route::get('/', [HomeController::class, 'home']);
Route::get('about', [HomeController::class, 'about']);
Route::get('service', [HomeController::class, 'service']);
Route::get('admin', [HomeController::class, 'admin']);


Route::get('inform', [BookingHomeController::class, 'inform'])->middleware('isLoggedIn');
Route::post('bookingdata', [BookingHomeController::class, 'bookingdata'])->name('booking.data');
Route::get('booking', [BookingHomeController::class, 'booking'])->middleware('isLoggedIn');




Route::get('record', [RecordController::class, 'record'])->middleware('isLoggedIn');
Route::get('edit', [RecordController::class, 'edit'])->middleware('isLoggedIn');





Route::get('pagebooking', [BookingHomeController::class, 'pagebooking'])->middleware('isLoggedIn');
Route::get('login', [LoginController::class, 'index'])->name('login')->middleware('AlreadyLoggedIn');
Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom'); 
/*---register---*/
Route::get('register', [LoginController::class, 'register'])->name('register-user')->middleware('AlreadyLoggedIn');
Route::post('custom-register', [LoginController::class, 'customRegister'])->name('register.custom'); 
/*---logout---*/
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');

