<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->string('mascota_nombre');
            $table->string('mascota_sexo');
            $table->string('mascota_color');
            $table->string('mascota_edad');
            $table->integer('razas_id')->unsigned();
            $table->integer('especies_id')->unsigned();
            $table->integer('esteticos_id')->unsigned();
            $table->integer('clinicos_id')->unsigned();
            $table->timestamps();
            $table->foreign('razas_id')->references('id')->on('razas');
            $table->foreign('especies_id')->references('id')->on('especies');
            $table->foreign('esteticos_id')->references('id')->on('esteticos');
            $table->foreign('clinicos_id')->references('id')->on('clinicos');
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
