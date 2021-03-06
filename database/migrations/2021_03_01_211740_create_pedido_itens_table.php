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
            $table->string('nome_linha');
            $table->unsignedBigInteger('produto');
            $table->string('nome_produto');
            $table->float('valor', 8, 2);
            $table->unsignedBigInteger('qtd_estoque')->nullable();
            $table->unsignedBigInteger('qtd_solicitado')->nullable();
            $table->float('valor_total_solicitado', 8, 2)->nullable();
            $table->unsignedBigInteger('qtd_liberado')->nullable();
            $table->float('valor_total_liberado', 8, 2)->nullable();
            $table->timestamps();

            $table->foreign('pedido')->references('id')->on('pedidos')->onDelete('CASCADE');
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
