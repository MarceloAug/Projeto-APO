<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pousada extends Model
{
    protected $table = 'pousada';

    protected $fillable = ['nome', 'endereco', 'cidade','cep','estado','bairro','observacoes','valor','dormitorios','imagem','totalHospedes'];

    public function hospedagem()
    {
        return $this->hasMany(Hospedagem::class,'pousada_Id');

    }

    public function pedido()
    {
        return $this->hasMany(Pedido::class,'pousada_Id');

    }
}
