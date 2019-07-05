  @extends('layout.principal')

@section('conteudo')


    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Listagem de pousadas
            </div>
           
            <div class="card-body">
            @if(empty($usuarios))
                <div class="alert alert-danger">
                    Não há pousadas cadastradas.
                </div>
            @else
                <form action="/usuarios/filtra" method="GET">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    <div class="row">
                        <div class="form-group col-sm-2">
                            <select name="filtro" class="form-control">
                                <option value="id">ID</option>
                                <option value="name">Nome</option>
                                <option value="email">Email</option>
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
                            <th></th>
                            <th></th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $e)
                            <tr>
                                <td>{{$e->id}}</td>
                                <td> {{$e->name}} </td>
                                <td> {{$e->email}} </td>
                                <td ><a href="/usuarios/remove/{{$e->id}}"><i class="fa fa-trash fa-lg mt-2"></i></a></td>
                                <td ><a href="/usuarios/FormUpdate/{{$e->id}}"><i class="fa fa-edit fa-lg mt-2"></i></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    {{ $usuarios->links() }}
            </div>
        </div>
    </div>
    @endif
@stop