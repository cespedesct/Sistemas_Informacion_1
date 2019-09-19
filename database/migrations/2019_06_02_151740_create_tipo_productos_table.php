<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 32);
            $table->string('perfil');
            $table->boolean('estado');

            $table->unsignedBigInteger('segmento_id');
            $table->foreign('segmento_id')->references('id')
                    ->on('segmentos')->onDelete('cascade');
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
        Schema::dropIfExists('tipo_productos');
    }
}
