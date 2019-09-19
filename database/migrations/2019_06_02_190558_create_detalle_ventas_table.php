<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('cantidad');

            $table->unsignedBigInteger('notaVenta_id');
            $table->unsignedBigInteger('producto_id');

            $table->foreign('notaVenta_id')->references('id')
                    ->on('nota_ventas')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_ventas');
    }
}
