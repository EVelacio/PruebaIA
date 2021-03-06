<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSecretariasTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secretarias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuarios_id')->unsigned();
            $table->integer('horarios_id')->unsigned();
            $table->timestamps();
            $table->foreign('usuarios_id')->references('id')->on('usuarios');
            $table->foreign('horarios_id')->references('id')->on('horarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('secretarias');
    }
}
