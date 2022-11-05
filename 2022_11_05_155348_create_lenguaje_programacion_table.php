<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLenguajeProgramacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lenguaje_programacion', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('logotipo');
            $table->string('nombre');
            $table->float('precio');
            $table->string('descripcion');
            $table->unsignedInteger('lenguaje_id');
            $table->date('fecha_creacion');
            $table->foreign('lenguaje_id')->references('id')->on('marcas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lenguaje_programacion');
    }
}
