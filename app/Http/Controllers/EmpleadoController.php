<?php

namespace Finilager\Http\Controllers;

//use Finilager\Empleado;
use Finilager\Persona;
use Finilager\Cargo;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('empleado.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::all();
        return view('empleado.create', compact('cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleado = new Persona();
        $empleado->nombre = $request->input('nombre');
        $empleado->correo = $request->input('correo');
        $empleado->direccion = $request->input('direccion');
        $empleado->sueldo = $request->input('sueldo');
        $empleado->cargo_id = $request->input('cargo_id');
        
        $empleado->empleado = true;
        $empleado->cliente = false;
        $empleado->estado = false;
        if ($request->input('estado') == "true"){
            $empleado->estado = true;
        }
        $empleado->save();

        $personas = Persona::all();
        return view('empleado.index', compact('personas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $empleado)
    {
        return  'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $empleado)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $empleado)
    {
        return 'destroy';
    }
}
