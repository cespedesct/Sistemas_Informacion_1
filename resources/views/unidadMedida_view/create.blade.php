@extends('layouts.head')

@section('label','Unidades de Medida')

@section('title','Nueva Unidad de Medida')

@section('content')

		<form class="form-group" method="POST" action="/unidad_medidas" enctype="multipart/form-data">
            {{ csrf_field() }} 
            <div class ="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class = "form-control"> 
            </div>
            

            <div class="form-group">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        Registrar
                    </button>
                </div>
            </div> 
    </form> 

@endsection
