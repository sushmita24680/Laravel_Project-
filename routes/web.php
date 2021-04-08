<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return redirect('about');
});

Route::get('/about',function()
{
    return view('about');
});

Route::get("user/{id}",[UserController::class,'show']);
Route::get('/user/{name}',function($name){
    return view('users');
});