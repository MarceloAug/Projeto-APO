<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function form(){
        return view('Auth.form_login');
     }

     public function form_register(){
        return view('Auth.form_register');
     }
}
