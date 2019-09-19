<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\unidadMedida;
use App\Http\Requests\StoreUnidad_MedidaRequest;
class Unidad_MedidaController extends Controller
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
        $unidadMedidas = unidadMedida::all();
        return view ('unidad_medida.index',compact('unidadMedidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view ('unidad_medida.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $unidadMedida= new unidadMedida();
        $unidadMedida->nombre = $request->input('nombre');
     
        $unidadMedida->save();
         $unidadMedidas = unidadMedida::all(); 

        return view('unidad_medida.index', compact('unidadMedidas'));
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
    public function edit(unidadMedida $unidadMedida)
    {
        return view ('unidad_medida.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,unidadMedida $unidadMedida)
    {        
        $unidadMedida->fill($request);
        $unidadMedida->save();
        return 'Updated';
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
