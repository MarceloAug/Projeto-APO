<?php

namespace App\Http\Controllers;
Use Request;
use App\User;
use Hash;

class usersController extends Controller
{

    

    public function form_adicionar(){
        return view('users.usersAdd');
    }

    public function insert(Request $request){
       
        $params = Request :: all();
        $params['password'] = Hash::make( $params['password']);
		$User = new User($params);
        $User->save();
        return view('Auth.form_login');
        
    }
   
     public function list(){
        return view('users.usersList');
    }
}
