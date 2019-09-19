<?php

namespace Finilager\Http\Controllers;

use Finilager\DetalleIngreso;
use Illuminate\Http\Request;

class DetalleIngresoController extends Controller
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
     * @param  \Finilager\DetalleIngreso  $detalleIngreso
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleIngreso $detalleIngreso)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\DetalleIngreso  $detalleIngreso
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleIngreso $detalleIngreso)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\DetalleIngreso  $detalleIngreso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleIngreso $detalleIngreso)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\DetalleIngreso  $detalleIngreso
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleIngreso $detalleIngreso)
    {
        return 'destroy';
    }
}
