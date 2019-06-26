<?php

namespace App\Http\Controllers;

use App\Cadastro;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;


class CadastrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('autorizador');
    }


    public function form_adicionar(){
        return view('cadastros.cadastrosAdd');
    }

    public function display($id){
        $cadastro = Cadastro::find($id);
        return view('cadastros.cadastrosDisplay')->with('cadastro', $cadastro);
    }

    public function form_update($id){
        $cadastro = Cadastro::find($id);
        return view('cadastros.cadastrosUpdate')->with('cadastro', $cadastro);
    }

    public function filter(Request $request){
        $filtro = Input::get('filtro');
        $campo = Input::get('campo');
        $cadastros = Cadastro :: where($filtro,$campo)->get();
        return view('cadastros.cadastrosList')->with('cadastro', $cadastro);
    }


    public function insert(Request $request){
    
        Cadastro::create($request->all());
      
        return redirect('/cadastros/lista')->withInput();
    }

    public function list(){
        $totalPag = 10;
        $cadastros = Cadastro::paginate($totalPag);//variavel que recebe as pousadas
        return view('cadastros.cadastrosList')->with('cadastros', $cadastros);///retorna para tela de listagem de pousadas
    }

    public function delete($id){
        $cadastro = Cadastro::find($id);
        $erro = "Não possível deletar esse cadastro pois ele possui pedidos vinculados";
        if($cadastro->pedido()->get()){
            $totalPag = 10;
            $cadastros = Cadastro::paginate($totalPag);
            return view('cadastros.cadastrosList')->with(compact('erro','cadastros'));
        }
        $cadastro = Cadastro::where('id', $id)->delete();
        return redirect()->action('CadastrosController@list');//redireciona para uma action

    }

    public function Update(Request $request){
        Cadastro::where('id', $request->id)->update(request()->except(['_token']));
        return redirect()->action('CadastrosController@list');
    }
}
