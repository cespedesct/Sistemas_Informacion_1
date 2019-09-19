<?php

namespace Finilager\Http\Controllers;

use Finilager\DetalleProducto;
use Illuminate\Http\Request;

class DetalleProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'create';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'store';
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\DetalleProducto  $detalleProducto
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleProducto $detalleProducto)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\DetalleProducto  $detalleProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleProducto $detalleProducto)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\DetalleProducto  $detalleProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleProducto $detalleProducto)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\DetalleProducto  $detalleProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleProducto $detalleProducto)
    {
        return 'destroy';
    }
}
