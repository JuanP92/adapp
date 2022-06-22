<?php

use App\Http\Controllers\Admin\ActividadController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function(){
    Route::get('', 'index')->name('admin');
});

Route::controller(ActividadController::class)->group(function(){
    Route::get('actividades', 'index')->name('actividades');
});


