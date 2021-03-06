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
            $table->string('status');
            $table->string('num_pedido_oggi')->nullable();
            $table->unsignedBigInteger('volume_solicitado')->nullable();
            $table->float('valor_solicitado', 8, 2)->nullable();
            $table->unsignedBigInteger('volume_liberado')->nullable();
            $table->float('valor_liberado', 8, 2)->nullable();
            $table->text('observacao')->nullable();
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
        Schema::dropIfExists('pedidos');
    }
}
