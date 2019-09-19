<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleTraspasosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_traspasos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('notaTraspaso_id');
            $table->unsignedBigInteger('producto_id');

            $table->foreign('notaTraspaso_id')->references('id')
                    ->on('nota_traspasos')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_traspasos');
    }
}
