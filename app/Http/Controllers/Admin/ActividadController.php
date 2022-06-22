<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    //
    public function index(){
        $actividades = Actividad::all();

        return view('admin.actividades.actividades', $actividades);
    }
}
