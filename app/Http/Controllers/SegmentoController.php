<?php

namespace Finilager\Http\Controllers;

use Illuminate\Http\Request;
use Finilager\segmento;
class SegmentoController extends Controller
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
        $segmentos=segmento::all();
        return view ('segmento.index',compact('segmentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $segmentos=segmento::all();
        return view ('segmento.create',compact('segmentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $segmento= new segmento();
        $segmento->nombre = $request->input('nombre');
     
        $segmento->save();
         
         $segmentos=segmento::all();
        return view('segmento.index', compact('segmentos'));
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
        return view ('segmento.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, segmento $segmento)
    {
         $segmento->fill($request);
        $segmento->save();
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