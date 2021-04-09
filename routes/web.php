<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
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
    return view('main');
});
Route::view('/manali-details','manali2');
Route::view('/manali','Manali');
Route::view('/manali-booking','Booking');
Route::view('/aboutus','aboutus');
Route::view('/feedback','feedback');
Route::view('/contactus','contact');
Route::view('/logind','signup');
Route::view('/check-bookings','showbooking');
Route::get("user/{id}",[UserController::class,'show']);
Route::get('/login',[UserAuthController::class,'authenti']);
Route::post('create',[UserAuthController::class,'create'])->name('create');