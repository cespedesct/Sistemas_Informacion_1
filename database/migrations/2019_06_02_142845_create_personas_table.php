<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre', 64);
            $table->string('correo', 32);
            $table->string('direccion', 64);
            $table->string('perfil');
            //ATRIBUTOS CLIENTE
            $table->boolean('cliente');
            $table->integer('nit')->nullable();
            $table->integer('descuento')->nullable();
            //ATRIBUTOS EMPLEADO
            $table->boolean('empleado');
            $table->float('sueldo', 6, 2)->nullable();
            $table->boolean('estado')->nullable();
            $table->unsignedBigInteger('cargo_id')->nullable();
            //----------------------------------
            $table->foreign('cargo_id')->references('id')
                    ->on('cargos')->onDelete('cascade');
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
        Schema::dropIfExists('personas');
    }
}
