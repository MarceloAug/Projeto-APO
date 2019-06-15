<?php

namespace App\Http\Controllers;
use App\Pousada;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('site.index');
    }

    public function FormCompra($id){
        $pousada = Pousada::find($id);
        return view('site.dadosCompra')->with('pousada', $pousada);
    }

    public function filter(Request $request){
        $filtro = Input::get('localidade');
        $pousadas = Pousada :: where("cidade",$filtro)->get();
        return view('site.index',["pousadas" => $pousadas]);
    }

}
