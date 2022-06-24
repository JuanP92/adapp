<?php

use App\Http\Controllers\Admin\ActividadController;
use App\Http\Controllers\admin\ConvocatoriaController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function(){
    Route::get('', 'index')->name('admin');
});

Route::controller(ActividadController::class)->group(function(){

    Route::get('actividades', 'index')->name('actividades');

    Route::get('actividades/crear', 'create')->name('crear-actividad');

    Route::post('actividades/registrar', 'registrar')->name('registrar-actividad');

    Route::post('actividades/modificar/{actividad}', 'modificar')->name('modificar-actividad');

    Route::put('actividades/update/{actividad}', 'update')->name('update-actividad');

    Route::delete('actividades/delete/{actividad}', 'delete')->name('delete-actividad');
    
});


Route::controller(ConvocatoriaController::class)->group(function(){

    Route::get('convocatorias','index')->name('convocatorias');

    Route::get('convocatorias/crear', 'create')->name('crear-convocatoria');

    Route::post('convocatorias/registrar', 'registrar')->name('registrar-convocatoria');

    Route::post('convocatorias/modificar/{convocatoria}', 'modificar')->name('modificar-convocatoria');

    Route::put('convocatorias/update/{convocatoria}', 'update')->name('update-convocatoria');

    Route::delete('convocatorias/delete/{convocatoria}', 'delete')->name('delete-convocatoria');

});