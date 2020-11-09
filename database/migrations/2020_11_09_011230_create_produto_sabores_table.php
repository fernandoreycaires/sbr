<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutoSaboresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produto_sabores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('linha');
            $table->string('sabor');
            $table->timestamps();

            $table->foreign('linha')->references('id')->on('produto_linhas')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produto_sabores');
    }
}
