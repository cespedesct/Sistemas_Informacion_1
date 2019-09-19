<?php

namespace Finilager\Http\Controllers;

use Illuminate\Http\Request;
use Finilager\Sucursal;
use Finilager\User;
use Finilager\Roles;
use Finilager\Almacen;
use Finilager\ubicaciones;

class SucursalController extends Controller
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
        $sucursal = Sucursal::all();
        $users=User::with('roles')->get();
        return view('sucursal.index', compact('sucursal'),compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $ubicaciones=ubicaciones::all();
        return view('sucursal.create',compact('ubicaciones'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursal = new Sucursal();
        $sucursal->ubicacion = $request->input('ubicacion');
        $sucursal->estado = 0;
        
        if ($request->input('estado') == "true"){
            $sucursal->estado = 1;
        }
        $sucursal->id_ubicacion=$request->input('id_ubicacion');
        $sucursal->perfil="null";
        $sucursal->save();
            
        
        $sucursal = Sucursal::all();
        return view('sucursal.index', compact('sucursal'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $sucursal=Sucursal::find($id);
        $ubicacion=Ubicaciones::find($sucursal->id_ubicacion);
      return view('sucursal.show',compact('sucursal'),compact('ubicacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $sucursal=Sucursal::find($id);
        return view ('sucursal.edit',compact('sucursal'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $proveedor->fill($request->except('avatar'));
        if ($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $sucursal->avatar = $name;
            $file->move(public_path().'/images/', $name);
        }
        $sucursal->save(); 
        return view('sucursal.edit', compact('sucursal'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
