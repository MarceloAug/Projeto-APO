<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pousada_Id');
            $table->unsignedBigInteger('cadastro_id');
            $table->decimal('valor');
            $table->timestamps();

            $table->foreign('pousada_Id')
                ->references('id')
                ->on('pousada');

            $table->foreign('cadastro_Id')
                ->references('id')
                ->on('cadastros');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}
