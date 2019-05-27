<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTablePousadas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pousada', function (Blueprint $table){
            $table->increments('id');
            $table->string('nome', 80);
            $table->decimal('valor', 8, 2);
            $table->integer('dormitorios');
            $table->string('endereco',50);
            $table->string('estado',50);
            $table->string('cidade',50);
            $table->string('bairro',50);
            $table->string('observacoes',255);
            $table->string('cep',12);
            $table->string('imagem',30);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pousada');
    }
}
