
	@extends('layouts.head')
@section('label','Unidades de Medida')

@section('title','Unidades de Medida')
@section('button3','Añadir Unidad')
@section('link3','/unidad_medidas/create')
@section('content')
	<div class="product_list">
		
          <table cellpadding="" cellspacing="" border="0" class="display" id="example">
                    <thead>
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                    	@foreach($unidadMedidas as $unidadMedida)
                        <tr class="odd gradeX">
                            <td>{{$unidadMedida->id}}</td>
                            <td>{{$unidadMedida->nombre}}</td>
                            <td> <a href="/unidad_medidas/{{$unidadMedida->id}}/edit" class ="btn tn-primary">Editar</a></td> 
                    	</tr>
                    	@endforeach
                     </tbody>
                </table>
		
	<div>

@endsection()

