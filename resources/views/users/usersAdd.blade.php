@extends('layout.principal')

@section('conteudo')

<div class="col-sm-12">
    <div class="card">
        <div class="card-header">
            <strong>Adicionar</strong>
            <small>Usuários</small>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input class="form-control" name="email" id="email" type="email" placeholder="email">
            </div>

            <div class="form-group">
                <label for="senha">Senha</label>
                <input class="form-control" id="senha" type="password" placeholder=senha">
            </div>

            <div class="form-group">
                <label for="street">Repita a senha </label>
                <input class="form-control" id="repeat" type="password" placeholder=senha">
            </div>

           
        </div>
    </div>
</div>
@stop