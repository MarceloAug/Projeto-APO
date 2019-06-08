<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    protected $table = 'cadastros';

    protected $fillable = ['id','nome','email', 'endereco', 'cidade','cep','estado','bairro','cpf','valor','cartaoCredito'];


    public function pedido()
    {
        return $this->hasMany(Pedido::class,'cadastro_id');

    }
}
