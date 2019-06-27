 @extends('layout.principal')

@section('conteudo')


<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <i class="fa fa-align-justify"></i> Listagem de pousadas
        </div>
        
        <div class="card-body">
        @if(empty($pedidos))
            <div class="alert alert-danger">
                Não há pousadas cadastradas.
            </div>
        @else
            <form action="/pousadas/filtra" method="GET">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="row">
                    <div class="form-group col-sm-2">
                        <select name="filtro" class="form-control">
                            <option value="id">ID</option>
                            <option value="nome">Nome</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-2">
                        <input type="text" name="campo" class="form-control pull-left" placeholder="Search">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>pousada</th>
                        <th>Cadastro</th>
                        <th>Valor</th>    
                        <th></th>    
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pedidos as $e)
                        <tr>
                            <td><a href="/pedidos/display/{{$e->id}}">{{$e->id}}</a></td>
                            <td> {{$e->pousada->nome}} </td>
                            <td> {{$e->cadastro->nome}} </td>
                            <td> {{$e->valor}} </td>
                            <td ><a href="/pedidos/remove/{{$e->id}}"><i class="fa fa-trash fa-lg mt-2"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                {{ $pedidos->links() }}
        </div>
    </div>
</div>
@endif
@stop