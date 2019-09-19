<?php

namespace Finilager\Http\Controllers;

use Finilager\NotaEgreso;
use Finilager\NotaVenta;
use Finilager\Motivo;
use Finilager\DetalleEgreso;
use Finilager\Producto;

use Illuminate\Http\Request;

class NotaEgresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = NotaEgreso::all();
        return view('notaEgreso.index', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        $motivos = Motivo::all();
        $ventas = NotaVenta::all();

        return view('notaEgreso.create', compact('motivos', 'ventas', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new NotaEgreso();
        $nota->fecha = $request->input('fecha');
        $nota->nota_venta_id = $request->input('notaVenta_id');
        $nota->motivo_id = $request->input('motivo_id');
        $nota->estado = false;
        if ($request->input('estado') == "true"){
            $nota->estado = true;
        }

        $nota->save();

        $detalle = new DetalleEgreso();
        $detalle->cantidad = $request->input('cantidad');
        $detalle->producto_id = $request->input('producto_id');
        $detalle->notaEgreso_id = $nota->id;
        
        $detalle->save();
        return redirect('/notaEgreso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\NotaEgreso  $notaEgreso
     * @return \Illuminate\Http\Response
     */
    public function show(NotaEgreso $notaEgreso)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\NotaEgreso  $notaEgreso
     * @return \Illuminate\Http\Response
     */
    public function edit(NotaEgreso $notaEgreso)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\NotaEgreso  $notaEgreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotaEgreso $notaEgreso)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\NotaEgreso  $notaEgreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotaEgreso $notaEgreso)
    {
        return 'destroy';
    }
}
