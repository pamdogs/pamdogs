<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('tar_24h')->unsigned();
            $table->integer('tar_h')->unsigned();
            $table->integer('tar_h_extra')->unsigned();
            $table->integer('mascota_extra')->unsigned();
            $table->boolean('lun');
            $table->boolean('mar');
            $table->boolean('mie');
            $table->boolean('jue');
            $table->boolean('vie');
            $table->boolean('sab');
            $table->boolean('dom');
            $table->boolean('diurno');
            $table->boolean('nocturno');
            $table->time('hora_desde');
            $table->time('hora_hasta');
            $table->integer('cuidador_id')->unsigned();
            $table->foreign('cuidador_id')->references('id')->on('cuidadores')->onDelete('cascade');
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
        Schema::drop('servicios');
    }
}
