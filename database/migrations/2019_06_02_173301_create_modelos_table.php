<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descripcion', 32);

            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('modelo_anio_id');

            $table->foreign('marca_id')->references('id')
                    ->on('marcas')->onDelete('cascade');
            $table->foreign('modelo_anio_id')->references('id')
                    ->on('modelo_anios')->onDelete('cascade');
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
        Schema::dropIfExists('modelos');
    }
}
