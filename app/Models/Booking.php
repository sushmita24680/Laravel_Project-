<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{

   use HasFactory;
   protected $table='bookings';

   function getids(){
      return $this->hasMany('App\Models\User');
   }

   

}
