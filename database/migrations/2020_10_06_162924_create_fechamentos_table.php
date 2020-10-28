<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFechamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fechamentos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('colaborador');
            $table->date('dia');
            $table->integer('pdv');
            $table->string('operador');
            $table->string('abertura_caixa');
            $table->string('fechamento_debito');
            $table->string('fechamento_credito');
            $table->string('fechamento_dinheiro');
            $table->text('observacao')->nullable();
            $table->string('slug');
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
        Schema::dropIfExists('fechamentos');
    }
}
