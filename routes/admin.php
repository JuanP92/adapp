<?php

use App\Http\Controllers\Admin\ActividadController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function(){
    Route::get('', 'index')->name('admin');
});

Route::controller(ActividadController::class)->group(function(){

    Route::get('actividades', 'index')->name('actividades');

    Route::get('actividades/crear', 'create')->name('crear-actividad');

    Route::post('actividades/registrar', 'registrar')->name('registrar-actividad');

    Route::get('actividades/modificar/{actividad}', 'modificar')->name('modificar-actividad');

    Route::put('actividades/update/{actividad}', 'update')->name('update-actividad');

    Route::delete('actividades/delete/{actividad}', 'delete')->name('delete-actividad');
    
});




