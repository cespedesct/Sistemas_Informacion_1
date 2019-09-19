<?php

namespace Finilager\Http\Controllers;

use Illuminate\Http\Request;
use Finilager\proveedor;
use Finilager\Http\Requests\StoreProveedorRequest;
class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth'=>'verified']);
    } 
    public function index()
    {
        $proveedores = proveedor::all();
        return view('proveedor.index', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('avatar')){
            $bool = "archivo encontrado";
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        $proveedor = new proveedor();
        $proveedor->nombre = $request->input('nombre');
        $proveedor->representante = $request->input('representante');
        $proveedor->pais = $request->input('pais');
        $proveedor->telefono = $request->input('telefono');
        $proveedor->perfil = $name;
        $proveedor->estado = FALSE;
        if ($request->input('estado') == "true"){
            $proveedor->estado = TRUE;
        }
        $proveedor->save();
        $proveedores = proveedor::all();
        return view('proveedor.index', compact('proveedores'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(proveedor $proveedor)
    {
        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proveedor $proveedor)
    {
        $proveedor->fill($request->except('avatar'));
        if ($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $proveedor->avatar = $name;
            $file->move(public_path().'/images/', $name);
        }
        $proveedor->save(); 
        return view('proveedor.edit', compact('proveedor'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedor $proveedor)
    {
        $proveedor->delete();
        return 'Deleted';
    }
}
