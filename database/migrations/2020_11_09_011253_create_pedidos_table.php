<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sabor');
            $table->unsignedBigInteger('qtd_estoque');
            $table->unsignedBigInteger('qtd_solicitado');
            $table->unsignedBigInteger('qtd_liberado');
            $table->timestamps();

            $table->foreign('sabor')->references('id')->on('produto_sabores');
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
