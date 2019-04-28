<?php
namespace App\Http\Controllers;
use Request;
use Auth;
use Hash;
use App\User;
use App\Http\Requests\RegisterRequest;

class LoginController extends Controller
{
	//método que leva para o formulário de login
    public function form(){
        return view('Auth.form_login');
    }



	//método que leva para o formulário de registro
     public function form_register(){
        return view('Auth.form_register');
	}

	
	//método que faz autentificação do usuário no sistema
	public function login(){
		$email = Request::input('email');
        $password = Request::input('password');
	
		if (Auth::attempt([ 'email' => $email, 'password' => $password ])) {
			return view('users.usersAdd');
		}

		return view('Auth.form_login');
	}



	//desloga o usuário do sistema
	public function logout() {
		Auth::logout();
		return redirect('/login');
	}



	//insere um novo usuário no sistema 
	public function insert(RegisterRequest $request){
		//busca o email 
		$email = User::where('email', $request['email'])->value('email');

		//se não encontrar o email cadastrado cadastra no banco  
		if(empty($email)){
			$params = $request->all();
			$params['password'] = Hash::make($params['password']);
			User::create($params);
			return view('Auth.form_login');
		}else {
			return view('Auth.form_register')->with('mensagem','Já existe esse e-mail cadastrado');
		}

       
	}
}
