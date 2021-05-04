<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Feedback;
class feedbackController extends Controller
{
    //

    function fback(Request $req)
{
    if(session()->has('user')){
  $fbdata=new Feedback ;
  
  $fbdata->fname=$req->firstname;
  $fbdata->lname=$req->lastname;
  $fbdata->email=$req->Email;
  $fbdata->country=$req->country;
  $fbdata->subject=$req->subject;
 
  $fbdata->save();
 echo '<script>alert("Thank you for your feedbacks ! Hope you will visit us again.")
 setTimeout(function() {window.location = "/" });</script>';
    }
    else{
          
        echo '<script>alert("Sorry! Dear Customer your feedback has been rejected. Before giving ur  first signup and login to our TourtoTravel page.")
        setTimeout(function() {window.location = "/login" });</script>';
       
      
      }

}
}
