@extends('layouts.head')

@section('label','Marca')
@section('add','Añadir Marca')
@section('link1','/marcas/create')
@section('content')
     
            <div class="product_list">
               
                <table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
                   <thead>
                        <tr >

                            <th style = "width:500px">Codigo</th>
                            <th style = "width:500px">Nombre</th>
                           
                            
                        </tr>
                    </thead>
                   <tbody>
                        @foreach($marcas as $marca)
                        <tr class="odd gradeX">
                            <td>{{$marca->id}}</td>
                            <td>{{$marca->nombre}}</td>
                            <td> <a href="/marcas/{{$marca->id}}/edit" class ="btn tn-primary">Editar</a></td> 
                        </tr>
                        @endforeach
                     </tbody>
                </table>
            </div>

@endsection
