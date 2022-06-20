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
        Schema::create('usuario_actividad', function (Blueprint $table) {
            $table->unsignedBigInteger('actividad_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            
            //indices
            $table->primary(['actividad_id','user_id']);

            $table->foreign('actividad_id')->references('id')->on('actividad_semestre');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario_actividad');
    }
};
