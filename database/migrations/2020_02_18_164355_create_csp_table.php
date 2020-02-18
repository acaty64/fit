<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCspTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('csp', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('curso', 6);
            $table->string('lcurso', 6);
            $table->string('wcurso', 120);
            $table->integer('creditos');
            $table->integer('syllabus_id');
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
        Schema::dropIfExists('csp');
    }
}
