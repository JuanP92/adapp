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
        Schema::create('actividad_semestre', function (Blueprint $table) {
            $table->id();
            $table->string('semestre',5);
            $table->date('fecha_ini');
            $table->date('fecha_fin');
            $table->timestamps();

            //foraneas
            $table->foreignId('actividad_id')->constrained('actividad');
            $table->foreignId('formato_id')->constrained('formato');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividad_semestre');
    }
};
