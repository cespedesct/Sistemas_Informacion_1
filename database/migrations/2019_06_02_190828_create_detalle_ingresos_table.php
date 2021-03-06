<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ingresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cantidad');
            $table->float('costoUnitario', 6, 2);

            $table->unsignedBigInteger('notaIngreso_id');
            $table->unsignedBigInteger('producto_id');

            $table->foreign('notaIngreso_id')->references('id')
                    ->on('nota_ingresos')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_ingresos');
    }
}
