<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEsteticosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esteticos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estetico_fecha');
            $table->integer('tipo_servicios_id')->unsigned();
            $table->timestamps();
            $table->foreign('tipo_servicios_id')->references('id')->on('tipo_servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('esteticos');
    }
}
