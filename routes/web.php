<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingrController;

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

Route::view('/goa','goa_beach');
Route::view('/goa-details','goa2');
Route::view('/aboutus','aboutus');
Route::view('/feedback','feedback');
Route::view('/contactus','contact');
Route::view('/logind','signup');

Route::view('booking','Booking');
Route::post('/booking',[BookingrController::class,'add']);
Route::get('show-booking',[BookingrController::class,'show']);
Route::get('/login', function () {
    return view('authenti');
});
Route::post('/login',[UserController::class,'login']);
Route::get('/register', function () {
    return view('authenti');
});
Route::post("/register",[UserController::class,'register']);
Route::view('/manali-booking','Booking');

Route::post('create',[UserAuthController::class,'create'])->name('create');
Route::get('/logout', function () {
    session()->forget('user');
      return redirect('/');
      
  });