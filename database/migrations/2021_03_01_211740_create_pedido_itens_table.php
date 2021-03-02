<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoItensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido_itens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido');
            $table->unsignedBigInteger('linha');
            $table->unsignedBigInteger('produto');
            $table->unsignedBigInteger('qtd_estoque')->nullable();
            $table->unsignedBigInteger('qtd_solicitado')->nullable();
            $table->unsignedBigInteger('qtd_liberado')->nullable();
            $table->timestamps();

            $table->foreign('pedido')->references('id')->on('pedidos')->onDelete('CASCADE');
            $table->foreign('linha')->references('id')->on('produto_linhas');
            $table->foreign('produto')->references('id')->on('produto_sabores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido_itens');
    }
}
