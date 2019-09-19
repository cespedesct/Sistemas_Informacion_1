<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('cantidad');

            $table->unsignedBigInteger('estante_id');
            $table->unsignedBigInteger('producto_id');

            $table->foreign('estante_id')->references('id')
                    ->on('estantes')->onDelete('cascade');
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
        Schema::dropIfExists('stocks');
    }
}
