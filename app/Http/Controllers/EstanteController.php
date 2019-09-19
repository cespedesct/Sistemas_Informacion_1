<?php

namespace Finilager\Http\Controllers;

use Illuminate\Http\Request;
use Finilager\Estante;
use Finilager\Almacen;
use Finilager\Sucursal;

class EstanteController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       


        $sucursals=sucursal::all();

          return view ('estante.create',compact('sucursals'));
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estante=new estante();

        $estante->capacidad=$request->input('capacidad');
        $estante->estado = FALSE;
        $estante->almacen_id=$request->input('almacen_id');
         if ($request->input('estado') == "true"){
            $estante->estado = TRUE;
        }
        $estante->save();
        return 'saved';

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
    public function edit($id)
    {
        //
    }

    public function getAlmacenes(Request $request,$id){

        if ($request->ajax()){
            $almacenes=Almacen::almacenes($id);
            return response()->json($almacenes);
        
            }
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
        //
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
