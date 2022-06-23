<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Actividad;
use App\Models\Convocatoria;
use Illuminate\Http\Request;

class ConvocatoriaController extends Controller
{
    //
    public function index(){
        // $convocatorias = Convocatoria::orderBy('id', 'desc')->paginate();
        $convocatorias = Convocatoria::orderBy('id', 'desc')->paginate();

        return view('admin.convocatorias.index', compact('convocatorias'));
    }
}
