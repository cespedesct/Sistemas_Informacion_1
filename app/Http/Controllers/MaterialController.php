<?php

namespace Finilager\Http\Controllers;

use Finilager\Material;
use Finilager\DetalleProducto;
use Finilager\Producto;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiales = Material::all();
        return view('material.index', compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        return view('material.create', compact('productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo = new Material();
        $nuevo->nombre = $request->input('nombre');
        $nuevo->save();

        $detalle = new DetalleProducto();
        $detalle->estado = $request->input('estado');
        $detalle->producto_id = $request->input('producto_id');
        $detalle->material_id = $nuevo->id;
        
        $detalle->save();
        return redirect('/materiales');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function show(Material $material)
    {
        return 'store';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function edit(Material $material)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Material $material)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\Material  $material
     * @return \Illuminate\Http\Response
     */
    public function destroy(Material $material)
    {
        return 'destroy';
    }
}
