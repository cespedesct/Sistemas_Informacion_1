<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuentaCobrarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_cobrars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->float('monto', 6, 2);
            $table->boolean('estado');

            $table->unsignedBigInteger('notaVenta_id');
            
            $table->foreign('notaVenta_id')->references('id')
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
        Schema::dropIfExists('cuenta_cobrars');
    }
}
