<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->BigIncrements('id');
            $table->integer('numeroEnlace');
            $table->string('categoria', 200);
            $table->unsignedBigInteger('organo_id');
            $table->unsignedBigInteger('adscripcion_id');
            $table->string('puesto', 200);
            $table->string('nombre', 250);
            $table->boolean('activo');
            $table->boolean('generado');
            $table->timestamps();

            $table->foreign('organo_id')->references('id')->on('organo_administrativos');
            $table->foreign('adscripcion_id')->references('id')->on('area_adscripcions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
