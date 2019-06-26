 @extends('layout.principal')

@section('conteudo')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="col-md-12">
                    <strong>{{$cadastro->nome}}</strong>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                            
                        <div><b>Nome:</b> {{$cadastro->nome}}</div>
                        <div><b>Email:</b> {{$cadastro->email}}</div>
                        <div><b>cpf:</b> {{$cadastro->cpf}}</div>
                        <div><b>Numero do cartão de credito:</b> {{$cadastro->cartaoCredito}}</div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <div><b>Endereco:</b> {{$cadastro->endereco}}</div>
                        <div><b>Estado:</b> {{$cadastro->estado}}</div>
                        <div><b>Cidade:</b> {{$cadastro->cidade}}</div>
                        <div><b>Bairro:</b> {{$cadastro->bairro}}</div>
                        <div><b>Cep:</b> {{$cadastro->cep}}</div> 
                    </div>
                
                </div>
                <hr />
                
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-2">
                        <a class="btn btn-block btn-light active" href="/cadastros/adicionar">Novo</a>  
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-block btn-secondary active" href="/cadastros/FormUpdate/{{$cadastro->id}}">Editar</a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
@stop