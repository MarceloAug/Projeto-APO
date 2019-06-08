<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = 'pedidos';

    protected $fillable = ['pousada_Id', 'cadastro_id', 'valor'];

    public function hospedagem()
    {
        return $this->belongsTo(Hospedagem::class,'pedido_Id');

    }

    public function pousada()
    {
        return $this->belongsTo(Pousada::class,'pousada_Id');

    }

    public function cadastro()
    {
        return $this->belongsTo(Cadastro::class,'cadastro_id');

    }
}
