<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_egresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('cantidad');

            $table->unsignedBigInteger('notaEgreso_id');
            $table->unsignedBigInteger('producto_id');

            $table->foreign('notaEgreso_id')->references('id')
                  ->on('nota_egresos')->onDelete('cascade');

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
        Schema::dropIfExists('detalle_egresos');
    }
}
