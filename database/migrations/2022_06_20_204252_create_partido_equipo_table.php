<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partido_equipo', function (Blueprint $table) {
            $table->unsignedBigInteger('partido_id');
            $table->unsignedBigInteger('equipo_id');
            $table->timestamps();
            
            //indices
            $table->primary(['partido_id','equipo_id']);

            $table->foreign('partido_id')->references('id')->on('partido');
            $table->foreign('equipo_id')->references('id')->on('equipo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partido_equipo');
    }
};
