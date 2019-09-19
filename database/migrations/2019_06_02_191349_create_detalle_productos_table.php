<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('estado',16);

            $table->unsignedBigInteger('material_id');
            $table->unsignedBigInteger('producto_id');

            $table->foreign('material_id')->references('id')
                    ->on('materials')->onDelete('cascade');
            $table->foreign('producto_id')->references('id')
                    ->on('productos')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_productos');
    }
}
