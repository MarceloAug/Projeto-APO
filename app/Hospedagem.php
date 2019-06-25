<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospedagem extends Model
{
    protected $table = 'hospedagens';

    protected $fillable = ['pousada_Id', 'pedido_Id','cadastro_Id', 'periodoDe','periodoAte'];

    public function pousada()
    {
        return $this->belongsTo(Pousada::class,'pousada_Id');

    }

    public function pedido()
    {
        return $this->belongsTo(Pedido::class,'pedido_Id');

    }
}
