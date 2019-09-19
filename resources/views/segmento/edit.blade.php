@extends('layouts.head')
@section('title','Editar Segmento')
@section('content')
		<form class="form-group" method="POST" action="segmento" enctype="multipart/form-data">
            {{ csrf_field() }} 
            <div class ="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class = "form-control"> 
            </div>
            

        <button type="submit" class ="btn btn-primary">Actualizar</button>
    </form> 
@endsection
