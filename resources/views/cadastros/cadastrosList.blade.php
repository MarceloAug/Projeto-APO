 @extends('layout.principal')

@section('conteudo')

    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Listagem de cadastros
            </div>
           
            <div class="card-body">
            @if(empty($cadastros))
                <div class="alert alert-danger">
                    Não há cadastros cadastrados.
                </div>
            @else

                @if(!empty($erro))
                    <div class="alert alert-danger">
                    {{$erro}}
                    </div>
                @endif
                <form action="/cadastros/filtra" method="GET">
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
                            <th>Nome</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>CEP</th>
                            <th></th>
                            <th></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cadastros as $e)
                            <tr>
                                <td><a href="/cadastros/display/{{$e->id}}">{{$e->id}}</a></td>
                                <td> {{$e->nome}} </td>
                                <td> {{$e->email}} </td>
                                <td> {{$e->cpf}} </td>
                                <td> {{$e->cep}} </td>
                                <td ><a href="/cadastros/remove/{{$e->id}}"><i class="fa fa-trash fa-lg mt-2"></i></a></td>
                                <td ><a href="/cadastros/FormUpdate/{{$e->id}}"><i class="fa fa-edit fa-lg mt-2"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    {{ $cadastros->links() }}
            </div>
        </div>
    </div>
    @endif
@stop