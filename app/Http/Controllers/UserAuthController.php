<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    //
    function authenti(){
        return view('authenti');
    }

    function create(Request $req){
        $req->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:7|max:12  '
        ]);
    }

}
