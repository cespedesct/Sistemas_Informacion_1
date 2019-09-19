@extends('layouts.head')

@section('label','Proveedor')

@section('title','Nuevo Proveedor')

@section('content')

<form class="form-group" method="POST" action="/proveedores" enctype="multipart/form-data">                        
     {{@csrf_field()}}
                            <!-- UBICACION-->
    <div class="form-group">
        <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

        
            <input name="nombre" type="text" class="form-control">
    </div>
        <!-- NOMBRE REPRESENTANTE PROVEEDOR -->
        <div class="form-group">
        <label for="representante" class="col-md-4 col-form-label text-md-right">Representante</label>

        
            <input name="representante" type="text" class="form-control">
        </div>
        <!-- PAIS PROVEEDOR -->
        <div class="form-group">
        <label for="pais" class="col-md-4 col-form-label text-md-right">País</label>

        
            <input name="pais" type="text" class="form-control">
        </div>
        <!-- TELEFONO PROVEEDOR -->
        <div class="form-group">
        <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>
            <input name="telefono" type="number" class="form-control">
        </div>


        <!--AVATAR PROVEEDOR OJO-->
        <div class="form-group">
        <label for="avatar" class="col-md-4 col-form-label text-md-right">avatar</label>
            <input type="file" name = "avatar">
        </div>
        <!-- ESTADO PROVEEDOR -->
        <div class="form-group">
        <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>

        
            <input name="estado" type="checkbox" class="form-control" value = "true">
        </div>
            <!-- REGISTRAR PROVEEDOR-->
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Registrar
                </button>
            </div>
                           
</form>

@endsection




