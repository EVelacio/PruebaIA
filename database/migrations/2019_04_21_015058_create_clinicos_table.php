<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClinicosTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clinicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clinico_fecha');
            $table->string('clinico_evaluacion');
            $table->string('clinico_tratamiendo');
            $table->integer('veterinarios_id')->unsigned();
            $table->timestamps();
            $table->foreign('veterinarios_id')->references('id')->on('veterinarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clinicos');
    }
}
