<?php

namespace App\Http\Controllers;

use App\Models\mdatosempresa;
use App\Models\mservicios;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services()
    {
        $datosempresa = mdatosempresa::find(1);
        $datos1 = mdatosempresa::find(1);
        $servicios = mservicios::paginate();
        $datos = mservicios::find(1);

        return view('services', compact('datos', 'servicios', 'datosempresa', 'datos1'));
    }
}
