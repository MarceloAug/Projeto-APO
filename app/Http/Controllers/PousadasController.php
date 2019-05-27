<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Pousada;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests\PousadaRequest;


class PousadasController extends Controller
{
    public function __construct()
    {
        $this->middleware('autorizador');
    }


    public function form_adicionar(){
        return view('pousadas.pousadasAdd');
    }


    public function form_update($id){
        $pousadas = Pousada::find($id);
        return view('pousadas.pousadasUpdate')->with('pousadas', $pousadas);
    }

    public function filter(Request $request){
        $filtro = Input::get('filtro');
        $campo = Input::get('campo');
        $pousadas = Pousada :: where($filtro,$campo)->get();
        return view('pousadas.pousadasList')->with('pousadas', $pousadas);
    }


    public function insert(PousadaRequest $request){
        Pousada::create($request->all());
        return redirect('/pousadas/lista')->withInput();
    }

    public function list(){
        $pousadas = Pousada::all();//variavel que recebe as pousadas
        return view('pousadas.pousadasList')->with('pousadas', $pousadas);///retorna para tela de listagem de pousadas
    }

    public function delete($id){
        Pousada::where('id', $id)->delete();
        return redirect()->action('PousadasController@list');//redireciona para uma action

    }

    public function Update(PousadaRequest $request){
        Pousada::where('id', $request->id)->update(request()->except(['_token']));
        return redirect()->action('PousadasController@list');
    }
}
