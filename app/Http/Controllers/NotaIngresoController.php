<?php

namespace Finilager\Http\Controllers;

use Finilager\NotaIngreso;
use Finilager\DetalleIngreso;
use Finilager\Proveedor;
use Finilager\Estante;
use Finilager\Usuario;
use Finilager\Producto;

use Illuminate\Http\Request;

class NotaIngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = NotaIngreso::all();
        return view('notaIngreso.index', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = Usuario::all();
        $estantes = Estante::all();
        $proveedores = Proveedor::all();
        $productos = Producto::all();
        return view('notaIngreso.create', compact('users', 'estantes', 'proveedores', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new NotaIngreso();
        $nota->fecha = $request->input('fecha');
        $nota->costo = $request->input('costo');
        $nota->proveedor_id = $request->input('proveedor_id');
        $nota->usuario_id = $request->input('usuario_id');
        $nota->estante_id = $request->input('estante_id');
        $nota->estado = false;
        if ($request->input('estado') == "true"){
            $nota->estado = true;
        }
        $nota->save();

        $detalle = new DetalleIngreso();
        $detalle->costoUnitario = $request->input('costoUnitario');
        $detalle->cantidad = $request->input('cantidad');
        $detalle->producto_id = $request->input('producto_id');
        $detalle->notaIngreso_id = $nota->id;
        
        $detalle->save();
        return redirect('/notaIngreso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\NotaIngreso  $notaIngreso
     * @return \Illuminate\Http\Response
     */
    public function show(NotaIngreso $notaIngreso)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\NotaIngreso  $notaIngreso
     * @return \Illuminate\Http\Response
     */
    public function edit(NotaIngreso $notaIngreso)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\NotaIngreso  $notaIngreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotaIngreso $notaIngreso)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\NotaIngreso  $notaIngreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotaIngreso $notaIngreso)
    {
        return 'destroy';
    }
}
