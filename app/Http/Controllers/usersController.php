<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function form_adicionar(){
        return view('users.usersAdd');
     }


     public function list(){
        return view('users.usersList');
     }
}
