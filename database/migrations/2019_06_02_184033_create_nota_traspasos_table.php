<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaTraspasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_traspasos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->boolean('estado');
            
            $table->unsignedBigInteger('almacenDestino_id');
            $table->unsignedBigInteger('almacenOrigen_id');
            $table->unsignedBigInteger('usuario_id');

            $table->foreign('almacenDestino_id')->references('id')
                    ->on('almacens')->onDelete('cascade');
            $table->foreign('almacenOrigen_id')->references('id')
                    ->on('almacens')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')
                    ->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('nota_traspasos');
    }
}
