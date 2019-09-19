<?php

namespace Finilager\Http\Controllers;

use Finilager\Producto;
use Finilager\UnidadMedida;
use Finilager\TipoProducto;
use Finilager\Modelo;
use Finilager\NombreProducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        $medidas = UnidadMedida::all();
        $tipos = TipoProducto::all();
        $modelos = Modelo::all();
        $names = NombreProducto::all();

        return view('producto.create', compact('productos', 'medidas', 'tipos', 'modelos', 'names'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo = new Producto();
        if ($request->hasFile('perfil')){
            $file = $request->file('perfil');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        // $nuevo->nombre = $request->input('nombre');
        $nuevo->precio = $request->input('precio');
        $nuevo->promedioPonderado = $request->input('promedioPonderado');
        $nuevo->perfil = $name;
        $nuevo->unidadMedida_id = $request->input('unidadMedida_id');
        $nuevo->nombreProducto_id = $request->input('nombreProducto_id');
        $nuevo->tipoProducto_id = $request->input('tipoProducto_id');
        $nuevo->modelo_id = $request->input('modelo_id');
        $nuevo->estado = false;
        if ($request->input('estado') == "true"){
            $nuevo->estado = true;
        }
        $nuevo->save();
        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \Finilager\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return 'show';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Finilager\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Finilager\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Finilager\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        return 'destroy';
    }
}
