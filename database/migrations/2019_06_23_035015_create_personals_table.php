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
            $table->increments('id');
            $table->integer('numeroEnlace');
            $table->string('categoria', 200);
            $table->integer('organo_id')->unsigned();
            $table->integer('adscripcion_id')->unsigned();
            $table->string('puesto', 200);
            $table->string('nombre', 250);
            $table->boolean('activo');
            $table->boolean('generado');
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
        Schema::dropIfExists('personals');
    }
}
