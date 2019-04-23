<?php

namespace App\Http\Controllers;
use Request;
use Auth;
class LoginController extends Controller
{
    public function form(){
        return view('Auth.form_login');
    }

     public function form_register(){
        return view('Auth.form_register');
	}
	
	public function login(){
		$email = Request::input('email');
        $password = Request::input('password');
	
		if (Auth::attempt([ 'email' => $email, 'password' => $password ])) {
			return view('users.usersAdd');
		}

		return view('Auth.form_login');
	}

     
}
