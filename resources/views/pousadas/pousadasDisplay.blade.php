 @extends('layout.principal')

@section('conteudo')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <div class="col-md-12">
                    <strong>{{$pousada->nome}}</strong>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                            
                        <div><b>Nome:</b> {{$pousada->nome}}</div>
                        <div><b>Endereco:</b> {{$pousada->endereco}}</div>
                        <div><b>Estado:</b> {{$pousada->estado}}</div>
                        <div><b>Cidade:</b> {{$pousada->cidade}}</div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        
                        <div><b>Bairro:</b> {{$pousada->bairro}}</div>
                        <div><b>Cep:</b> {{$pousada->cep}}</div> 
                    </div>
                
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-10">
                            <div><b>Observações:</b> {{$pousada->observacoes}}</div>
                            <div><b>Valor:</b> {{$pousada->valor}}</div> 
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-md-2">
                        <a class="btn btn-block btn-light active" href="/pousadas/adicionar">Novo</a>  
                    </div>
                    <div class="col-md-2">
                        <a class="btn btn-block btn-secondary active" href="/pousadas/FormUpdate/{{$pousada->id}}">Editar</a>
                    </div>  
                </div>
            </div>
        </div>
    </div>
@stop