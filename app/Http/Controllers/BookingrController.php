<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Subscribe;
use Illuminate\Support\Facades\Hash;

class BookingrController extends Controller
{
    function Save(Request $req)
    {
      
      $user1=new Booking ;
      $user1->fname=$req->fname;
      $user1->lname=$req->lname;
      $user1->email=$req->email;
      $user1->phone=$req->phone;
      $user1->country=$req->country;
      $user1->package=$req->package;
      $user1->current_destination=$req->current_destination;
      $user1->date=$req->date;
      $user1->mode=$req->mode;
      $user1->people=$req->people;
      $user1->remarks=$req->remarks;
     
     $user1->save();
     echo '<script>alert("Thank you for choosing ! For further process we will contact you soon.")
     setTimeout(function() {window.location = "/" });</script>';
     
    }

    function Save1(Request $req)
    {
      
      $user2=new Subscribe ;
    
      $user2->email=$req->email;

     
     $user2->save();
     echo '<script>alert("Thank you for subscription ! For further process we will contact you soon.")
     setTimeout(function() {window.location = "/" });</script>';
     
    }


   

    
}
