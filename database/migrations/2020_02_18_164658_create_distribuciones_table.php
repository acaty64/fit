<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistribucionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distribuciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('carrera_id');
            $table->integer('semestre');
            $table->integer('qcursos');
            $table->string('tsemestre',1);
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
        Schema::dropIfExists('distribuciones');
    }
}
