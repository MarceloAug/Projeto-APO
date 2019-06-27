 @extends('layout.principal')

@section('conteudo')
<script>

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

   

    if(diff == null){
        valorTotal.html('0.00' +'R$');
        return;
    }

    if (diff < 0){
        iziToast.error({
            title: 'Periodo até não pode ser maior que o periodo de',
            color:'#EB5959',
        });
        
        var periodoAte = $('#periodoAte').val("");
        valorTotal.html('0.00' +'R$');
        return;
    }

    if(diff == 0){diff = 1;}
   
    var total = parseFloat(valorPousada) * parseInt(diff);
   
    //if (typeof parseFloat(total).toFixed(2) == "NaN"){total = 0;} 
    valorTotal.html(parseFloat(total).toFixed(2) +'R$');
}
</script>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <div class="col-md-12">
                <strong>Confirmação de pedido </strong>
            </div>
        </div>
        <div class="card-body">
            <form action="/pedidos/insert" method="POST">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <input type="hidden" name="cadastro_id" value="{{$cadastro->id}}" />
                <input type="hidden" name="pousada_Id" value="{{$pousada->id}}" />
                <div class="row">
                    <div class="col-md-3">
                            
                        <div><b>Nome:</b> {{$pousada->nome}}</div>
                        <div ><b>Valor:</b> <span id="valorpousada">{{$pousada->valor}}</span></div>
                        <div><b>Estado:</b> {{$pousada->estado}}</div>
                        <div><b>Cidade:</b> {{$pousada->cidade}}</div>
                        <div><b>Bairro:</b> {{$pousada->bairro}}</div>
                        <div><b>Cep:</b> {{$pousada->cep}}</div> 
                        <div><b>Observações:</b> {{$pousada->observacoes}}</div>
                        <div><b>Endereço:</b> {{$pousada->endereco}}</div> 
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div><b>Nome:</b> {{$cadastro->nome}}</div>
                        <div><b>Email:</b> {{$cadastro->email}}</div>
                        <div><b>cpf:</b> {{$cadastro->cpf}}</div>
                        <div><b>Numero do cartão de credito:</b> {{$cadastro->cartaoCredito}}</div>
                        <div><b>Endereco:</b> {{$cadastro->endereco}}</div>
                        <div><b>Estado:</b> {{$cadastro->estado}}</div>
                        <div><b>Cidade:</b> {{$cadastro->cidade}}</div>
                        <div><b>Bairro:</b> {{$cadastro->bairro}}</div>
                        <div><b>Cep:</b> {{$cadastro->cep}}</div> 
                    </div>
                
                </div>
                <hr />
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="periodoDe">Periodo De</label>
                        <input required type="date" class="form-control" id="periodoDe" name="periodoDe" onchange="atualiza()">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="periodoAte">Periodo Ate</label>
                        <input required type="date" class="form-control" id="periodoAte" name="periodoAte" onchange="atualiza()">
                    </div>
                </div>
                <div><b>Total de :</b><span id="valor">0,00R$</span> </div>
                <button class="btn btn-block btn-ghost-secondary active" type="submit"><i class="fa fa-dot-circle-o"></i> confirmar pedido</button>
            </form>
        </div>
    </div>
</div>
            
     
@stop