<?php

namespace Finilager\Http\Controllers;

use Finilager\Persona;
use Finilager\Cargo;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('persona.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargos = Cargo::all();
        return view('persona.create', compact('cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->input('nombre');
        $persona->correo = $request->input('correo');
        $persona->direccion = $request->input('direccion');
        $persona->empleado = false;
        $persona->cliente = false;
        if ($request->input('cliente')){
            $persona->nit = $request->input('nit');
            $persona->descuento = $request->input('descuento');
            $persona->cliente = true;
        }
        if ($request->input('empleado')){
            $persona->sueldo = $request->input('sueldo');
            $persona->cargo_id = $request->input('cargo_id');
            $persona->empleado = true;
            $persona->estado = false;
            if ($request->input('estado')){
                $persona->estado = true;   
            }
        }
        $persona->save();

        $personas = Persona::all();
        return view('persona.index', compact('personas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        return 'destroy';
    }
}
