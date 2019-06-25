<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $table = 'cadastros';

    protected $fillable = ['nome','email', 'endereco', 'cidade','cep','estado','bairro','cpf','valor','cartaoCredito','codigoSeguranca'];


    public function pedido()
    {
        return $this->hasMany(Pedido::class,'cadastro_id');

    }
}
