<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Booking;

class BookingrController extends Controller
{

  function index(){
    return Booking::find()->getids;
  }
  
function show()
{
  $data = Booking::all();
  return view('Showbooking',['bookings'=>$data]);
}
   
function add(request $req)
{
  $book = new Booking;

  $req->validate([
    'travelling_mode'=>'required'
  ]);
  
 $book->fname=$req->input('fname');
 $book->lname=$req->input('lname');
 $book->email=$req->input('email');
  $book->phone=$req->input('phone');
 $book->country=$req->input('country');
 $book->package=$req->input('package');
 $book->current_destination=$req->input('current_destination');
 $book->date=$req->input('date');
 $book->travelling_mode=$req->input('travelling_mode');
 $book->people=$req->input('people');
 $book->remarks=$req->input('remarks');
 $book->save();
 return redirect('/');
}
    
}
