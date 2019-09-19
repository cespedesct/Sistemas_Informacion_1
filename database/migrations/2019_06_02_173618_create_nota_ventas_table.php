<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotaVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->float('monto', 8, 2);
            $table->boolean('estado');
            
            $table->unsignedBigInteger('usuario_id');
            $table->unsignedBigInteger('cliente_id');
            

            $table->foreign('cliente_id')->references('id')
                    ->on('personas')->onDelete('cascade');
            $table->foreign('usuario_id')->references('id')
                    ->on('usuarios')->onDelete('cascade');
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
        Schema::dropIfExists('nota_ventas');
    }
}
