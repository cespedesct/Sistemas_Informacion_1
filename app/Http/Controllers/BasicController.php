<?php

namespace Finilager\Http\Controllers;

use Illuminate\Http\Request;
use Finilager\Sucursal;
use Finilager\ubicaciones;
class BasicController extends Controller
{
    public function sucursales(){
        $sucursales=Sucursal::all();
        return view('sucursal.basic',compact('sucursales'));
    }
    public function ubicaciones(){
        $ubicaciones=ubicaciones::all();
        return view('ubicacion.basic',compact('ubicaciones'));
    }
}
