<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('nivel',['Cliente','Miembro','Administrador'])->default('Cliente');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('email')->unique()->nullable();
            $table->string('password', 200);
            $table->date('nacimiento');
            $table->string('telefono')->unique()->nullable();
            $table->string('dni_tipo');
            $table->string('dni_numero')->unique()->nullable();
            $table->enum('genero',['Femenino','Masculino'])->nullable();
            $table->string('facebook_id')->unique()->nullable();
            $table->string('avatar')->nullable();
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
