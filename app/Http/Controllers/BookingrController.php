<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Booking;
use App\Models\Subscribe;
use Illuminate\Contracts\Session\Session as SessionSession;
use Session;
class BookingrController extends Controller
{


function show(request $req)
{
  if(session()->has('user')){
  $userId=Session::get('user')['id'];
  $data= DB::table('bookings')
            ->where('bookings.user_id',$userId)
            ->get();

              return view('Showbooking',['bookings'=>$data]);
            }
            else{

              abort(404);

            }
}



function add(request $req)
{

  if($req->session()->has('user')){
 $req->session()->put('booking','Booking');
 echo"Session booking";
  $book = new Booking;
  $book->user_id=$req->session()->get('user')['id'];
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
 echo '<script>alert("Thank you for choosing ! For further process we will contact you soon.")
 setTimeout(function() {window.location = "show-booking" });</script>';

  }
  else{
    echo '<script>alert("Sorry! Dear Customer your booking has been canceled. Before booking any tour first signup and login to our TourtoTravel page.")
    setTimeout(function() {window.location = "/login" });</script>';

}
}

function Save1(Request $req)
{

  $user2=new Subscribe ;

  $user2->email=$req->email;


 $user2->save();
 echo '<script>alert("Thank you for subscription ! For further  we will contact you with exciting offers soon.")
 setTimeout(function() {window.location = "/" });</script>';

}


}
