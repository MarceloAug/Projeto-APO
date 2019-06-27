@extends('layout.principal')

@section('conteudo')

<div class="col-sm-12">
    <div class="card-header">
        <strong>Adicionar</strong>
        <small>pedidos</small>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="/pedidos/confirm" method="POST">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cadastro_id">Cadastro</label>
                        <select class="form-control" id="cadastro_id" name="cadastro_id">
                            <option value="0">Selecione um cadastro</option>
                            @if($cadastros->count() > 0)
                                @foreach($cadastros as $cadastro)
                                    <option value="{{$cadastro->id}}">{{$cadastro->nome}}</option>
                                @endForeach
                            @endif
                        </select>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="pousada_Id">Pousada</label>
                        <select class="form-control" id="pousada_Id" name="pousada_Id">
                            <option value="0">Selecione uma pousada</option>
                            @if($pousadas->count() > 0)
                                @foreach($pousadas as $pousada)
                                    <option value="{{$pousada->id}}">{{$pousada->nome}} - {{$pousada->valor}}</option>
                                @endForeach
                            @endif
                        </select>
                    </div>
                </div>
                <button class="btn btn-block btn-ghost-secondary active" type="submit"><i class="fa fa-dot-circle-o"></i> Seguinte</button>
            </form>
         </div>   
    </div>
</div>
@stop