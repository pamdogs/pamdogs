<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCuidadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuidadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('descripcion');
            $table->string('experiencia');
            $table->boolean('tam_10')->default(0);
            $table->boolean('tam_11_20')->default(0);
            $table->boolean('tam_21_40')->default(0);
            $table->boolean('tam_40')->default(0);
            $table->string('vivienda');
            $table->boolean('jardin');
            $table->boolean('balcon');
            $table->boolean('terraza');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('latitud');
            $table->string('longitud');
            $table->string('rango');
            $table->boolean('auto');
            $table->boolean('mascota_perro');
            $table->boolean('mascota_gato');
            $table->boolean('domicilio');
            $table->boolean('contratado');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::drop('cuidadores');
    }
}
