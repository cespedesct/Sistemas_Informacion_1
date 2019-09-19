@extends('layouts.head')

@section('label','Segmentos')

@section('title','Nuevo Segmento')

@section('content')

		<form class="form-group" method="POST" action="/segmentos" enctype="multipart/form-data">
            {{ csrf_field() }} 
            <div class ="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class = "form-control"> 
            </div>
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Registrar
                </button>
            </div>
    </form> 

@endsection