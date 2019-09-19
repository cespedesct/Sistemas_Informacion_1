<?php

namespace Finilager\Http\Controllers;

use Finilager\DetalleEgreso;
use Illuminate\Http\Request;

class DetalleEgresoController extends Controller
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
     * @param  \Finilager\DetalleEgreso  $detalleEgreso
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleEgreso $detalleEgreso)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\DetalleEgreso  $detalleEgreso
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleEgreso $detalleEgreso)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\DetalleEgreso  $detalleEgreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleEgreso $detalleEgreso)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\DetalleEgreso  $detalleEgreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleEgreso $detalleEgreso)
    {
        return 'destroy';
    }
}
