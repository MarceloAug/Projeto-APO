<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cadastro;
use App\Pousada;
use App\Hospedagem;
use App\Pedido;
use Illuminate\Support\Facades\Input;
use DateTime;


class PedidosController extends Controller
{
    public function __construct()
    {
        $this->middleware('autorizador');
    }


    public function form_adicionar(){
        $cadastros = Cadastro::all();
        $pousadas = Pousada::all();
        return view('pedidos.pedidosAdd')->with(compact('cadastros','pousadas'));
    }


    public function confirm(Request $request){
        $cadastro = Cadastro::find($request->cadastro_id);
        $pousada = Pousada::find($request->pousada_Id);
        return view('pedidos.pedidosConfirm')->with(compact('cadastro','pousada'));
    }

    public function insert(Request $request){

        $pousada = Pousada::find($request->pousada_Id);
        $hospedagem = new Hospedagem;
        $pedido = new Pedido;
        
        ///grava os dados do pedido 
        //calcular valor do pedido
        $ate = new DateTime($request->periodoAte);
        $de = new DateTime($request->periodoDe);
        $intervalo = $ate->diff($de);
        if($intervalo->format("%d") == 0){
            $valor = $pousada->valor;
        }else{
            $valor = $intervalo->format("%d") * $pousada->valor;
        }
    
        $pedido->pousada_Id =$request->pousada_Id;
        $pedido->cadastro_id = $request->cadastro_id;
        $pedido->valor = $valor;
        $pedido->save();

        $hospedagem->pousada_Id = $request->pousada_Id;
        $hospedagem->pedido_Id = $pedido->id;
        $hospedagem->cadastro_Id = $request->cadastro_id;
        $hospedagem->periodoDe = $request->periodoDe;
        $hospedagem->periodoAte = $request->periodoAte;
        $hospedagem->save();

        return redirect('/pedidos/listar')->withInput();
    }

    public function list(){
        $totalPag = 10;
        $pedidos = Pedido::paginate($totalPag);//variavel que recebe as pousadas
        return view('pedidos.pedidosList')->with('pedidos', $pedidos);///retorna para tela de listagem de pousadas
    }



    public function display($id){
        $pedido = Pedido::find($id);
        $cadastro = Cadastro::find($pedido->cadastro_id);
        $pousada = Pousada::find($pedido->pousada_Id);
        $hosp = Hospedagem::where('pedido_Id', $pedido->id)->get();
        $hospedagem = Hospedagem::find($hosp[0]['id']);
        return view('pedidos.pedidosDisplay')->with(compact('cadastro','pousada','hospedagem'));
    }

    public function delete($id){
        Pedido::where('id', $id)->delete();
        return redirect()->action('PedidosController@list');//redireciona para uma action

    }

    public function filter(Request $request){
        $filtro = Input::get('filtro');
        $campo = Input::get('campo');
        $pedidos = Pedido :: where($filtro,$campo)->paginate(10);
        return view('pedidos.pedidosList')->with('pedidos', $pedidos);
    }


    
}
