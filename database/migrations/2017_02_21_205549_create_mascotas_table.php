<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('avatar');
            $table->date('nacimiento');
            $table->enum('genero',['Femenino','Masculino']);
            $table->string('raza'); // Raza
            $table->text('personalidad'); // Personalidad
            $table->text('rutina');
            $table->string('duerme'); // Donde duerme
            $table->string('comida_tipo');
            $table->string('comida_hora');
            $table->string('hora_paseo');
            $table->boolean('con_perros'); // Se lleva con otros perros
            $table->boolean('con_chicos'); // Se lleva con niños
            $table->boolean('salta'); // Salta sobre personas
            $table->boolean('celo'); // En celo
            $table->boolean('vacuna')->nullable(); // Vacuna
            $table->boolean('esterilizado')->nullable(); // Esterilizado
            $table->string('vet_nombre');
            $table->string('vet_telefono');
            $table->string('vet_direccion');
            $table->boolean('seguro');
            $table->string('compania_seguro')->nullable();
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
        Schema::drop('mascotas');
    }
}
