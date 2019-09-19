<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaEgresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_egresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->boolean('estado');

            $table->unsignedBigInteger('nota_venta_id');
            $table->unsignedBigInteger('motivo_id');
            
            $table->foreign('motivo_id')->references('id')
                    ->on('motivos')->onDelete('cascade');
            $table->foreign('nota_venta_id')->references('id')
                    ->on('nota_ventas')->onDelete('cascade');
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
        Schema::dropIfExists('nota_egresos');
    }
}
