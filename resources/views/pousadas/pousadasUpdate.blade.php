@extends('layout.principal')

@section('conteudo')


<div class="col-sm-12">
    <div class="card-header">
        <strong>Adicionar</strong>
        <small>Pousadas</small>
    </div>
    <div class="card">
        <div class="card-body">
         
        <form action="/pousadas/update" method="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="id" value="{{$pousadas->id}}" />
          

            <div class="form-group">
                <label for="nome">Nome</label>
                <input required class="form-control" name="nome" id="nome" type="text" placeholder="Nome pousada"  maxlength="80" value="{{$pousadas->nome}}">
            </div>

            <div class="form-group">
                <label for="senha">Endereco</label>
                <input required class="form-control" name="endereco" id="endereco" type="text" placeholder="Endereco da pousada" maxlength="50" value="{{$pousadas->endereco}}">
            </div>

            <div class="row">
                <div class="form-group col-sm-3">
                    <label for="street">CEP </label>
                    <input required class="form-control" id="cep" type="text" name="cep" placeholder="cep"  maxlength="12" value="{{$pousadas->cep}}">
                </div>

                <div class="form-group col-sm-3">
                    <label for="street">Cidade </label>
                    <input required class="form-control" id="cidade" type="text" name="cidade" placeholder="cidade" maxlength="50" value="{{$pousadas->cidade}}">
                </div>
                <div class="form-group col-sm-3">
                    <label for="street">Estado </label>
                    <input required class="form-control" id="estado" type="text" placeholder="estado" name="estado" maxlength="50"  value="{{$pousadas->estado}}">
                </div>

                <div class="form-group col-sm-3">
                    <label for="street">Bairro </label>
                    <input required class="form-control" id="Bairro" type="text" placeholder="bairro" name="bairro" maxlength="50"  value="{{$pousadas->bairro}}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-3">
                    <label for="street">Imagem </label>
                    <input required class="form-control" id="imagem" type="text" placeholder="imagem" name="imagem" value="{{$pousadas->imagem}}">
                </div>

                <div class="form-group col-sm-3">
                    <label for="street">Valor </label>
                    <input required class="form-control"  type="number" step="0.01" id="valor" placeholder="valor" name="valor" value="{{$pousadas->valor}}">
                </div>

                <div class="form-group col-sm-3">
                    <label for="dormitorios">Dormitorios</label>
                    <input required class="form-control" name="dormitorios" id="dormitorios" type="number" placeholder="dormitorios"  value="{{$pousadas->dormitorios}}">
                </div>
            </div>

            <div class="form-group col-sm-3">
                <label for="street">Observações</label>
                <textarea required name="observacoes" rows="7" cols="80">{{$pousadas->observacoes}}</textarea>
            </div>
            
        </div>

        <div class="card-footer">
            <button class="btn btn-sm btn-primary" type="submit"><i class="fa fa-dot-circle-o"></i> Adicionar</button>
        </div>

        </form>
            
    </div>
</div>
@stop