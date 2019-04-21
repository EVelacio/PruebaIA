<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_nombre');
            $table->string('user_apellido_paterno');
            $table->string('user_apellido_materno');
            $table->string('user_edad');
            $table->string('user_calle');
            $table->string('user_numext');
            $table->string('user_clolonia');
            $table->string('user_cp');
            $table->string('user_tel');
            $table->string('user_cel');
            $table->string('user_email')->unique();
            $table->string('user_pass');
            $table->integer('tipo_usuarios_id')->unsigned();
            $table->timestamps();
            $table->foreign('tipo_usuarios_id')->references('id')->on('tipo_usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuarios');
    }
}
