<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use App\Models\Convocatoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class ConvocatoriaController extends Controller
{
    //
    public function index(){
        $convocatorias = Convocatoria::orderBy('id', 'desc')->paginate();

        return view('admin.convocatorias.index', compact('convocatorias'));
    }

    public function create(){
        $actividades = Actividad::all();

        return view('admin.convocatorias.crear', compact('actividades'));
    }

    public function registrar(Request $request){
        $convocatoria = new Convocatoria();

        $convocatoria->semestre = $request->semestre;
        $convocatoria->cupos = $request->cupos;
        $fechas = explode(' - ',$request->date_range);
        $convocatoria->fecha_ini = Date::create($fechas[0]);
        $convocatoria->fecha_fin = Date::create($fechas[1]);
        $convocatoria->actividad_id = $request->actividad_id;

        $convocatoria->save();

        return redirect()->route('convocatorias');
    }
}
