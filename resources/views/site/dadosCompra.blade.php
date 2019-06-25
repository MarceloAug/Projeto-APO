@extends('site.principal')
@section('conteudo')

<script>

$(document).ready(function(){
  
  $('#cep').mask('00000-000');
  $('#cpf').mask('000.000.000-00', {reverse: true});

});

function atualiza(){
 var periodoDe = $('#periodoDe').val();
 var periodoAte = $('#periodoAte').val();
 var valorPousada = $('#valorpousada').text();
 var valorTotal = $('#valor');

    moment.locale('pt-br');
    //setando data1
    var data1 = moment(periodoDe);
    //setando data2
    var data2 = moment(periodoAte);
    //tirando a diferenca da data2 - data1 em dias
    var diff  = data2.diff(data1, 'days');
    if (diff < 0){
        iziToast.error({
            title: 'Periodo até não pode ser maior que o periodo de',
            color:'#EB5959',
        });
      
        var periodoAte = $('#periodoAte').val("");
        return;
    }

    if(diff == 0){diff = 1;}
    var total = parseFloat(valorPousada) * parseInt(diff);
    // if (typeof parseFloat(total).toFixed(2) === "undefined"){total = 0;}
    valorTotal.html(parseFloat(total).toFixed(2) +'R$');

}



</script>
<div class="main main-raised">
    <div class="section section-basic">	
        <div class="container">
            <h3 class="title">Dados de reserva</h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">  
                    <div class="card">
                        <figure class="figure">
                            <img src="{{asset('storage/imagens/'.$pousada->imagem)}}" class="figure-img img-fluid rounded" alt="pousada{{$pousada->nome}}">
                        </figure>
                        <div class="card-body" >
                            <h5><span class="tim-note text-warning" style="text-transform: uppercase;">{{$pousada->nome}}</span></h5>
                            <p class="card-text">{{$pousada->observacoes}}</p>
                            <i class="icon-location-pin icons font-2xl d-block mt-4"></i>{{$pousada->cidade}},{{$pousada->estado}},{{$pousada->endereco}}
                            <p class="text-warning">Diarias a partir de:</p>
                            <h2 class="text-muted" id="valorpousada">{{$pousada->valor}}R$</h2>
                            <p class="text-warning">Valor total de :</p>
                            <h2 class="text-muted" id="valor"></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-12">  
                    <form action="/index/confirmacaoReserva" method="POST">
                        <input required type="hidden" id="id" name="id" value="{{$pousada->id}}">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <div class="form-group">
                                <label for="nome">Nome</label>
                                <input required type="text" class="form-control" id="nome"  name="nome" maxlength="50">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input required type="email" class="form-control" id="email"  name="email" maxlength="50">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="cpf">CPF</label>
                                <input required type="text" class="form-control" id="cpf"  name="cpf" maxlength="20">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="endereco">Endereço</label>
                                <input required type="text" class="form-control" id="endereco"  name="endereco" maxlength="50">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cep">CEP</label>
                                <input required type="text" class="form-control" id="cep" name="cep" maxlength="12">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="cep">Bairro</label>
                                <input required type="text" class="form-control" id="bairro" name="bairro" maxlength="50">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cidade">Cidade</label>
                                <input required type="text" class="form-control" id="cidade" name="cidade" maxlength="50">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="estado">Estado</label>
                                <input required type="text" class="form-control" id="estado" name="estado">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCEP">Numero do cartão de credito </label>
                                <input required type="text" class="form-control" id="cartaoCredito" name="cartaoCredito" maxlength="30">
                            </div>
                      
                            <div class="form-group col-md-6">
                                <label for="codigoSeguranca">codigo de segurança</label>
                                <input requiered type="text" class="form-control" id="codigoSeguranca" name="codigoSeguranca" maxlength="3">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="periodoDe">Periodo De</label>
                                <input required type="date" class="form-control datetimepicker" id="periodoDe" name="periodoDe" onchange="atualiza()">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="periodoAte">Periodo Ate</label>
                                <input required type="date" class="form-control datetimepicker" id="periodoAte" name="periodoAte" onchange="atualiza()">
                            </div>
                            <button type="submit" class="btn btn-primary">Confirmar reserva</button>
                        </div>
                    </form>   
                </div>
            </div>         
        </div>
    </div>
</div>
@stop	