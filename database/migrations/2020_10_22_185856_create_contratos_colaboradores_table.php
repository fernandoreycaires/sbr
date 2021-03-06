<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratosColaboradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contratos_colaboradores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('colaborador');
            $table->float('salario', 8, 2);
            $table->string('carga_horaria');
            $table->string('ocupacao');
            $table->enum('status', ['ativo', 'inativo']);
            $table->date('registro');
            $table->date('demicao')->nullable();
            $table->timestamps();

            $table->foreign('colaborador')->references('id')->on('colaboradores')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contratos_colaboradores');
    }
}
