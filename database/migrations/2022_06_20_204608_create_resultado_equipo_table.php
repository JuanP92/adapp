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
        Schema::create('resultado_equipo', function (Blueprint $table) {
            $table->id();
            $table->string('marcador', 50);
            $table->timestamps();

            //foraneas
            $table->foreignId('ganador')->constrained('equipo');
            $table->foreignId('partido_id')->constrained('partido');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resultado_equipo');
    }
};
