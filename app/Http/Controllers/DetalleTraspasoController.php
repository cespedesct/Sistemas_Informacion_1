<?php

namespace Finilager\Http\Controllers;

use Finilager\DetalleTraspaso;
use Illuminate\Http\Request;

class DetalleTraspasoController extends Controller
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
     * @param  \Finilager\DetalleTraspaso  $detalleTraspaso
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleTraspaso $detalleTraspaso)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\DetalleTraspaso  $detalleTraspaso
     * @return \Illuminate\Http\Response
     */
    public function edit(DetalleTraspaso $detalleTraspaso)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\DetalleTraspaso  $detalleTraspaso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DetalleTraspaso $detalleTraspaso)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\DetalleTraspaso  $detalleTraspaso
     * @return \Illuminate\Http\Response
     */
    public function destroy(DetalleTraspaso $detalleTraspaso)
    {
        return 'destroy';
    }
}
