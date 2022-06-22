<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    //
    public function index(){
        $actividades = Actividad::orderBy('id', 'desc')->paginate();

        return view('admin.actividades.actividades', compact('actividades'));
    }

    public function create(){
        return view('admin.actividades.crear');
    }

    public function registrar(Request $request){
        $actividad = new Actividad();

        $actividad->nombre = $request->nombre;
        $actividad->descripcion = $request->descripcion;
        $actividad->por_equipos = $request->por_equipos? 1:0;
        $actividad->tipo_id = $request->tipo_id;

        $actividad->save();

        return redirect()->route('actividades');
    }

    public function modificar(Actividad $actividad){

        return view('admin.actividades.modificar', compact('actividad') );
    }

    public function update(Actividad $actividad, Request $request){
        $actividad->nombre = $request->nombre;
        $actividad->descripcion = $request->descripcion;
        $actividad->por_equipos = empty($request->por_equipos)?0:1;
        $actividad->tipo_id = $request->tipo_id;

        $actividad->update();
        return redirect()->route('actividades');
    }

    public function delete(Actividad $actividad){
        $actividad->delete();

        return redirect()->route('actividades');
    }
}
