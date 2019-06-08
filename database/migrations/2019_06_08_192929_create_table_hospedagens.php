<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHospedagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedagens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('pousada_Id');
            $table->unsignedBigInteger('pedido_Id');
            $table->date('periodoDe');
            $table->date('periodoAte');
            $table->timestamps();


            $table->foreign('pousada_Id')
                ->references('id')
                ->on('pousada');

            $table->foreign('pedido_Id')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospedagens');
    }
}
