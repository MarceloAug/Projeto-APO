@extends('layout.principal')

@section('conteudo')
<script>
    $(document).ready(function(){
    
        $('#cep').mask('00000-000');
        $('#cpf').mask('000.000.000-00', {reverse: true});
    
    });
</script>
<div class="col-sm-12">
    <div class="card-header">
        <strong>Adicionar</strong>
        <small>Cadastros</small>
    </div>
    <div class="card">
        <div class="card-body">
          
            <form action="/cadastros/update" method="POST">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <input type="hidden" name="id" value="{{$cadastro->id}}" />
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input required class="form-control" name="nome" id="nome" type="text" placeholder="Nome do cadastro"  maxlength="80" value="{{$cadastro->nome}}">
                </div>
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input required class="form-control" name="email" id="email" type="text" placeholder="Email do cadastro"  maxlength="80" value="{{$cadastro->email}}">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="cpf">CPF</label>
                        <input required type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" maxlength="20" value="{{$cadastro->cpf}}">
                    </div>

                </div>
                <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input required type="text" class="form-control" id="endereco" placeholder="endereço do cadastro" name="endereco" maxlength="50" value="{{$cadastro->endereco}}">
                    </div>
   
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="cidade">Cidade</label>
                        <input required type="text" class="form-control" id="cidade" placeholder="cidade do cadastro" name="cidade" maxlength="50" value="{{$cadastro->cidade}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="estado">Estado</label>
                        <input required type="text" class="form-control" id="estado" placeholder="Estado do cadastro" name="estado" maxlength="50" value="{{$cadastro->estado}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="cep">CEP</label>
                        <input required type="text" class="form-control" id="cep" name="cep" placeholder="CEP do cadastro" maxlength="12" value="{{$cadastro->cep}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="bairro">Bairro</label>
                        <input required type="text" class="form-control" id="bairro" placeholder="bairro do cadastro" name="bairro" maxlength="50" value="{{$cadastro->bairro}}">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="cartaoCredito">Numero do cartão de credito </label>
                        <input required type="text" class="form-control" id="cartaoCredito" placeholder="Número do cartão de credito" name="cartaoCredito" maxlength="30" value="{{$cadastro->cartaoCredito}}">
                    </div>
              
                    <div class="form-group col-md-6">
                        <label for="codigoSeguranca">codigo de segurança</label>
                        <input required type="text" class="form-control" id="codigoSeguranca" placeholder=" código de segurança do cartão" name="codigoSeguranca" maxlength="3" value="{{$cadastro->codigoSeguranca}}">
                    </div>
                </div>
          
                
            </div>

            <div class="card-footer">
                <button class="btn btn-block btn-ghost-secondary active" type="submit"><i class="fa fa-dot-circle-o"></i> Adicionar</button>
            </div>

            </form>
            
    </div>
</div>
@stop