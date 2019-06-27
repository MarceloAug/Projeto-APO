<?php

namespace App\Http\Controllers;
use App\Http\Requests\RegisterRequest;
Use Request;
use App\User;
use Hash;

class usersController extends Controller
{

    public function __construct()
    {
        $this->middleware('autorizador');
    }

    public function form_update($id){
        $usuario = user::find($id);
        return view('users.usersUpdate')->with('usuario', $usuario);
    }

    public function form_adicionar(){
        return view('users.usersAdd');
    }

    public function insert(RegisterRequest $request){
       
        $params = Request :: all();
        $params['password'] = Hash::make($params['password']);
        $User = new User($params);
        $User->save();
        return view('users.userList');
        
    }
   
     public function list(){
        $totalPag = 10;
        $usuarios = User::paginate($totalPag);//variavel que recebe as pousadas
        return view('users.usersList')->with('usuarios', $usuarios);
    }

    public function delete($id){
        User::where('id', $id)->delete();
        return redirect()->action('usersController@list');//redireciona para uma action

    }

    public function Update(Request $request){
        $params = Request :: all();
        $user = User::find($params['id']);
        $params['password'] = Hash::make($params['password']);

        $user->update($params);
        return redirect()->action('usersController@list');
    }

}
