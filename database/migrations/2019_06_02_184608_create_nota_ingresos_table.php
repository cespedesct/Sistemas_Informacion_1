<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_ingresos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->float('costo', 6, 2);
            $table->boolean('estado');

            $table->unsignedBigInteger('proveedor_id');
            $table->unsignedBigInteger('estante_id');
            $table->unsignedBigInteger('usuario_id');

            $table->foreign('usuario_id')->references('id')
                    ->on('usuarios')->onDelete('cascade');
            $table->foreign('proveedor_id')->references('id')
                    ->on('proveedors')->onDelete('cascade');
            $table->foreign('estante_id')->references('id')
                    ->on('estantes')->onDelete('cascade');
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
        Schema::dropIfExists('nota_ingresos');
    }
}
