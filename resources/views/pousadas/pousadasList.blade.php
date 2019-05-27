 @extends('layout.principal')

@section('conteudo')

@if(empty($pousadas))
    <div class="alert alert-danger">
        Não há pousadas cadastradas.
    </div>
@else
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Listagem de pousadas
            </div>
           
            <div class="card-body">
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
                <table class="table table-responsive-sm table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Valor</th>
                            <th>Endereco</th>
                            <th>Acões</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pousadas as $e)
                            <tr>
                                <td> {{$e->id}} </td>
                                <td> {{$e->nome}} </td>
                                <td> {{$e->valor}} </td>
                                <td> {{$e->endereco}} </td>
                                <td>
                                    <a href="/pousadas/remove/{{$e->id}}">
                                        <span class="glyphicon glyphicon-trash">Remover</span>
                                    </a>
                                    <a href="/pousadas/FormUpdate/{{$e->id}}">
                                        <i class="glyphicon glyphicon-pencil">Editar</i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <ul class="pagination">
                    <li class="page-item">
                    <a class="page-link" href="#">Prev</a>
                    </li>
                    <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="#">3</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="#">4</a>
                    </li>
                    <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    @endif
@stop