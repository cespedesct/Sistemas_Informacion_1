<?php

namespace Finilager\Http\Controllers;

use Finilager\NotaTraspaso;
use Finilager\Usuario;
use Finilager\Almacen;
use Finilager\Producto;
use Finilager\DetalleTraspaso;
use Illuminate\Http\Request;

class NotaTraspasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = NotaTraspaso::all();
        return view('notaTraspaso.index', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        $users = Usuario::all();
        $almacenes = Almacen::all();
        return view('notaTraspaso.create', compact('users', 'almacenes', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new NotaTraspaso();
        $nota->fecha = $request->input('fecha');
        $nota->almacenOrigen_id = $request->input('origen_id');
        $nota->almacenDestino_id = $request->input('destino_id');
        $nota->usuario_id = $request->input('usuario_id');
        $nota->estado = false;
        if ($request->input('estado') == "true"){
            $nota->estado = true;
        }
        $nota->save();

        $detalle = new DetalleTraspaso();
        $detalle->cantidad = $request->input('cantidad');
        $detalle->producto_id = $request->input('producto_id');
        $detalle->notaTraspaso_id = $nota->id;
        
        $detalle->save();
        return redirect('/notaTraspaso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\NotaTraspaso  $notaTraspaso
     * @return \Illuminate\Http\Response
     */
    public function show(NotaTraspaso $notaTraspaso)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\NotaTraspaso  $notaTraspaso
     * @return \Illuminate\Http\Response
     */
    public function edit(NotaTraspaso $notaTraspaso)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\NotaTraspaso  $notaTraspaso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotaTraspaso $notaTraspaso)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\NotaTraspaso  $notaTraspaso
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotaTraspaso $notaTraspaso)
    {
        return 'destroy';
    }
}
