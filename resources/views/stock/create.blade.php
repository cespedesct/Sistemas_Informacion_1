@extends('layouts.head')

@section('label','Cargos')

@section('title','Añadir Cargo')

@section('content')

<form class="form-group" method="POST" action="/cargos" enctype="multipart/form-data">                        
     {{@csrf_field()}}
                        
    <div class="form-group">
        <label for="nombre" class="col-md-4 col-form-label text-md-right">Ocupacion</label>
            <input name="nombre" type="text" class="form-control">
    </div>
        <!-- REGISTRAR PROVEEDOR-->
    <div class="form-group">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </div>

    </div>                        
</form>

@endsection


