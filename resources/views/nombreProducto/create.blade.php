@extends('layouts.head')

@section('label','Nombre de Producto')

@section('title','Añadir Nombre de Producto')

@section('content')

<form class="form-group" method="POST" action="/nombreProductos" enctype="multipart/form-data">                        
     {{@csrf_field()}}
                            <!-- UBICACION-->
        <div class="form-group">

            <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
            <input name="nombre" type="text" class="form-control">
        <!-- REGISTRAR CARGO-->
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </div>
    </div>                        
</form>

@endsection