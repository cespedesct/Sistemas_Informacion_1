<?php

namespace Finilager\Http\Controllers;

use Finilager\CuentaCobrar;
use Finilager\NotaVenta;
use Illuminate\Http\Request;

class CuentaCobrarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = CuentaCobrar::all();
        return view('cuentaCobrar.index', compact('cuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventas = NotaVenta::all();
        return view('cuentaCobrar.create', compact('ventas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cuenta = new CuentaCobrar();
        $cuenta->fecha = $request->input('fecha');
        $cuenta->monto = $request->input('monto');
        $cuenta->notaVenta_id = $request->input('notaVenta_id');
        $cuenta->estado = false;
        if ($request->input('estado') == "true"){
            $cuenta->estado = true;
        }

        $cuenta->save();
        return redirect('cuentaCobrar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\CuentaCobrar  $cuentaCobrar
     * @return \Illuminate\Http\Response
     */
    public function show(CuentaCobrar $cuentaCobrar)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\CuentaCobrar  $cuentaCobrar
     * @return \Illuminate\Http\Response
     */
    public function edit(CuentaCobrar $cuentaCobrar)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\CuentaCobrar  $cuentaCobrar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CuentaCobrar $cuentaCobrar)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\CuentaCobrar  $cuentaCobrar
     * @return \Illuminate\Http\Response
     */
    public function destroy(CuentaCobrar $cuentaCobrar)
    {
        return 'destroy';
    }
}
