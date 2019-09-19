<?php

namespace Finilager\Http\Controllers;

//use Finilager\Cliente;
use Finilager\Persona;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('cliente.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Persona();
        $cliente->nombre = $request->input('nombre');
        $cliente->correo = $request->input('correo');
        $cliente->direccion = $request->input('direccion');
        $cliente->nit = $request->input('nit');
        $cliente->descuento = $request->input('descuento');

        $cliente->cliente = true;
        $cliente->empleado = false;
        $cliente->save();

        $personas = Persona::all();
        return view('cliente.index', compact('personas'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $cliente)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $cliente)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $cliente)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $cliente)
    {
        return 'destroy';
    }
}
