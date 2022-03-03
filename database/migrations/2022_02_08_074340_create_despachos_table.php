<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDespachosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('despachos', function (Blueprint $table) {
            $table->id();
            $table->string('usuario_id')->nullable();
            $table->string('usuario')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('nroguia')->nullable();
            $table->string('cliente')->nullable();
            $table->string('litros')->nullable();
            $table->string('entrega')->nullable();
            $table->string('observacion')->nullable();

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
        Schema::dropIfExists('despachos');
    }
}
