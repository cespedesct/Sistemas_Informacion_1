@extends('layouts.head')

@section('title', 'Proveedores')
@section('add','Nuevo Proveedor')
@section('link1','/proveedores/create')

@section('content')
	<div class="row">
		@foreach($proveedores as $proveedor)
			@if($proveedor->estado)
				<div class="col-sm">
					<div class="card text-center" style="width: 15rem; margin-top: 30px">
						<img style = "height: 100px; width: 100px; background-color: #EFEFEF; margin-top: 5px"class="card-img-top mx-auto d-block" src="images/{{$proveedor->avatar}}" alt=""></img>
						<div class="card-body">
							<h5 class="card-title">{{$proveedor->nombre}}</h5>
						    <p class="card-text" style="font-size: 15; line-height: 20px; font-family: all;">
						    	Representante:	{{$proveedor->representante}}<br>
						    	Pais:	{{$proveedor->pais}}<br>                    
						    	Teléfono:	{{$proveedor->telefono}}
						    </p>
						    <div class="row-sm" style="font-style: all;">
						    	<a href="/proveedores/{{$proveedor->id}}/edit" style="color:#FFF" class="btn btn-success">Editar</a>
						    	
						    </div>
						</div>
					</div>
				</div>
			@endif
		@endforeach
	</di	v>
@endsection