<?php

namespace App\Http\Controllers;
use App\Pousada;
use App\Hospedagem;
use App\Pedido;
use App\Cadastro;
use Illuminate\Support\Facades\Input;
use DateTime;

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

    public function Confirm(Request $request){

            $pousada = Pousada::find($request->id);
            $cadastro = new Cadastro;
            $hospedagem = new Hospedagem;
            $pedido = new Pedido;

            ///salva os dados do cadastro
            $cadastro->email = $request->email;
            $cadastro->nome = $request->nome;
            $cadastro->cpf = $request->cpf;
            $cadastro->endereco = $request->endereco;
            $cadastro->cep = $request->cep;
            $cadastro->cidade = $request->cidade;
            $cadastro->bairro = $request->bairro;
            $cadastro->estado = $request->estado;
            $cadastro->cartaoCredito = $request->cartaoCredito;
            $cadastro->codigoSeguranca = $request->codigoSeguranca;
            $cadastro->save();


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
        
            $pedido->pousada_Id = $pousada->id;
            $pedido->cadastro_id = $cadastro->id;
            $pedido->valor = $valor;
            $pedido->save();

            $hospedagem->pousada_Id = $pousada->id;
            $hospedagem->pedido_Id = $pedido->id;
            $hospedagem->cadastro_Id = $cadastro->id;
            $hospedagem->periodoDe = $request->periodoDe;
            $hospedagem->periodoAte = $request->periodoAte;
            $hospedagem->save();

            return view('site.compraConfirmada');
    }

}
