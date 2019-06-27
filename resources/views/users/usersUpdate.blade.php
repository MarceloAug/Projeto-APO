@extends('layout.principal')

@section('conteudo')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <strong>Adicionar</strong>
            <small>Usuários</small>
        </div>
        <div class="card-body">
             @if (count($errors) > 0)
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
            <form action="/usuarios/update" method="POST">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <input type="hidden" name="id" value="{{$usuario->id}}" />
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input required class="form-control" name="name" id="nome" type="text" placeholder="nome" value="{{$usuario->name}}">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input required class="form-control" name="email" id="email" type="email" placeholder="email" value="{{$usuario->email}}">
                </div>

                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input required class="form-control" type="password" placeholder="Senha" name="password" >
                </div>

               
                <div class="card-footer">
                    <button class="btn btn-block btn-ghost-secondary active" type="submit"><i class="fa fa-dot-circle-o"></i> Adicionar</button>
                </div>

            </form>
        </div>
    </div>
</div>
@stop