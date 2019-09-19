<?php

namespace Finilager\Http\Controllers;

use Finilager\NotaVenta;
use Finilager\Persona;
use Finilager\Usuario;
use Finilager\Producto;
use Finilager\DetalleVenta;
use Illuminate\Http\Request;
use PDF;

class NotaVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = NotaVenta::all();
        return view('notaVenta.index', compact('notas'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        $personas = Persona::all();
        $users = Usuario::all();
        return view('notaVenta.create', compact('personas', 'users', 'productos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nota = new NotaVenta();
        $nota->fecha = $request->input('fecha');
        $nota->monto = $request->input('monto');
        $nota->usuario_id = $request->input('usuario_id');
        $nota->cliente_id = $request->input('cliente_id');
        $nota->estado = false;
        if ($request->input('estado') == "true"){
            $nota->estado = true;
        }
        $nota->save();

        $detalle = new DetalleVenta();
        $detalle->cantidad = $request->input('cantidad');
        $detalle->producto_id = $request->input('producto_id');
        $detalle->notaVenta_id = $nota->id;
        
        $detalle->save();
        return redirect('/notaVenta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\NotaVenta  $notaVenta
     * @return \Illuminate\Http\Response
     */
    public function show(NotaVenta $notaVenta)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\NotaVenta  $notaVenta
     * @return \Illuminate\Http\Response
     */
    public function edit(NotaVenta $notaVenta)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\NotaVenta  $notaVenta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NotaVenta $notaVenta)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\NotaVenta  $notaVenta
     * @return \Illuminate\Http\Response
     */
    public function destroy(NotaVenta $notaVenta)
    {
        return 'destroy';
    }
    public function nota(){
      $pdf=\App::make('dompdf.wrapper');
     // $pdf->loadHTML($this->convert_costumer_data_to_html());
    }
}
