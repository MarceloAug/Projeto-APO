<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pousada extends Model
{
    protected $table = 'pousada';

    protected $fillable = ['nome', 'endereco', 'cidade','cep','estado','bairro','observacoes','valor','dormitorios','imagem'];
}
