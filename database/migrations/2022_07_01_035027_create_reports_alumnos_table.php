<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports_alumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_id')->unsigned();
            $table->string('nombre_profesor');
            $table->string('materia')->nullable();
            $table->text('observaciones');
            $table->timestamps();
            $table->foreign('alumno_id')->references('id')->on('alumnos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reports_alumnos');
    }
}
