<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre',32);
            $table->float('precio',6,2);
            $table->float('promedioPonderado',6,2);
            $table->string('perfil');
            $table->boolean('estado');

            $table->unsignedBigInteger('unidadMedida_id');
            $table->unsignedBigInteger('tipoProducto_id');
            $table->unsignedBigInteger('modelo_id');
            $table->unsignedBigInteger('nombreProducto_id');
            
            $table->foreign('unidadMedida_id')->references('id')
                    ->on('unidad_medidas')->onDelete('cascade');
            $table->foreign('tipoProducto_id')->references('id')
                    ->on('tipo_productos')->onDelete('cascade');
            $table->foreign('modelo_id')->references('id')
                    ->on('modelos')->onDelete('cascade');
            $table->foreign('nombreProducto_id')->references('id')
                    ->on('nombre_productos')->onDelete('cascade');        
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
        Schema::dropIfExists('productos');
    }
}
