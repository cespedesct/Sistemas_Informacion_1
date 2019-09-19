@extends('layouts.head')

@section('label','Modelo año')

@section('title','Nuevo Modelo Año')

@section('content')

<form class="form-group" method="POST" action="/modelo_años" enctype="multipart/form-data">                        
     {{@csrf_field()}}
                            <!-- UBICACION-->
    <div class="form-group">
        <label for="nombre" class="col-md-4 col-form-label text-md-right">AÑO</label>
            <input name="año" type="number" class="form-control">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Registrar
                </button>
            </div>

    </div>                        
</form>

@endsection