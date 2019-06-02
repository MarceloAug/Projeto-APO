<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Repositories\ImageRepository;
use App\Pousada;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;



class PousadasController extends Controller
{
    public function __construct()
    {
        $this->middleware('autorizador');
    }


    public function form_adicionar(){
        return view('pousadas.pousadasAdd');
    }

    public function display($id){
        $pousada = Pousada::find($id);
        return view('pousadas.pousadasDisplay')->with('pousada', $pousada);
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


    public function insert(Request $request,ImageRepository $image){
    
        $pousada = Pousada::create($request->all());

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $image->saveImagePousada($request->file('imagem'),$pousada->id,$pousada->nome);
        }
        return redirect('/pousadas/lista')->withInput();
    }

    public function list(){
        $totalPag = 10;
        $pousadas = Pousada::paginate($totalPag);//variavel que recebe as pousadas
        return view('pousadas.pousadasList')->with('pousadas', $pousadas);///retorna para tela de listagem de pousadas
    }

    public function delete($id){
        Pousada::where('id', $id)->delete();
        return redirect()->action('PousadasController@list');//redireciona para uma action

    }

    public function Update(Request $request,ImageRepository $image){
        Pousada::where('id', $request->id)->update(request()->except(['_token']));
        if($request->hasFile('imagem') && $request->file('imagem')->isValid()){
            $image->saveImagePousada($request->file('imagem'),$request->id,$request->nome);
        }
        return redirect()->action('PousadasController@list');
    }
}
