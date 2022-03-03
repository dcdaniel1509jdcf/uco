<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLlamadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('llamadas', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->nullable();
            $table->string('cliente')->nullable();
            $table->string('direccion')->nullable();
            $table->string('comuna')->nullable();
            $table->string('telefonos1')->nullable();
            $table->string('telefonos2')->nullable();
            $table->string('seg1')->nullable();
            $table->string('seg2')->nullable();
            $table->string('seg3')->nullable();
            $table->string('seg4')->nullable();
            $table->string('seg5')->nullable();
            $table->string('seg6')->nullable();
            $table->string('usuario_id')->nullable();
            $table->string('usuario')->nullable();
            $table->dateTime('fecha')->nullable();
            $table->string('estado')->nullable();
            $table->string('telefono_contactado')->nullable();
            $table->string('subestado')->nullable();
            $table->dateTime('fecha_agendamiento')->nullable();
            $table->string('detalle')->nullable();
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
        Schema::dropIfExists('llamadas');
    }
}
