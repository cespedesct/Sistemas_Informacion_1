<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('capacidad');
            $table->boolean('estado');
            $table->unsignedBigInteger('almacen_id');

            $table->foreign('almacen_id')->references('id')
                    ->on('almacens')->onDelete('cascade');
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
        Schema::dropIfExists('estantes');
    }
}
