<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecibosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->float('monto', 8, 2);
            $table->float('saldo', 8, 2);

            $table->unsignedBigInteger('cuentaCobrar_id');

            $table->foreign('cuentaCobrar_id')->references('id')
                  ->on('cuenta_cobrars')->onDelete('cascade');

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
        Schema::dropIfExists('recibos');
    }
}
