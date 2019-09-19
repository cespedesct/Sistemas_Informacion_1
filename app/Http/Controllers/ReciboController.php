<?php

namespace Finilager\Http\Controllers;

use Finilager\Recibo;
use Finilager\CuentaCobrar;
use Illuminate\Http\Request;

class ReciboController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recibos = Recibo::all();
        return view('recibo.index', compact('recibos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cuentas = CuentaCobrar::all();
        return view('recibo.create', compact('cuentas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $recibo = new Recibo();
        $recibo->fecha = $request->input('fecha');
        $recibo->monto = $request->input('monto');
        $recibo->saldo = $request->input('saldo');
        $recibo->cuentaCobrar_id = $request->input('cuentaCobrar_id');
        $recibo->save();

        return redirect('/recibos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\Recibo  $recibo
     * @return \Illuminate\Http\Response
     */
    public function show(Recibo $recibo)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\Recibo  $recibo
     * @return \Illuminate\Http\Response
     */
    public function edit(Recibo $recibo)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\Recibo  $recibo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recibo $recibo)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\Recibo  $recibo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recibo $recibo)
    {
        return 'destroy';
    }
}
