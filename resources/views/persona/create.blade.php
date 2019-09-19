@extends('layouts.head')

@section('label','Personas')

@section('title','Añadir Personas')

@section('content')

<form class="form-group" method="POST" action="/personas" enctype="multipart/form-data">                        
     {{@csrf_field()}}
                            <!-- UBICACION-->
    <div class="form-group">
        <!-- NOMBRE PERSONA-->
        
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                
                                    <input name="nombre" type="text" class="form-control">
    </div>
                            <!-- NOMBRE  CORREO -->
                            <div class="form-group">
                                <label for="correo" class="col-md-4 col-form-label text-md-right"> Correo</label>

                            
                                    <input name="correo" type="text" class="form-control">
                            
                            </div>
                            <!-- DIRECCION-->
                            <div class="form-group">
                                <label for="direccion" class="col-md-4 col-form-label text-md-right">Direccion</label>

                            
                                    <input name="direccion" type="text" class="form-control">
                            </div>
                            <!-- ESTADO PROVEEDOR -->
                            <div class="form-group">
                                <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>

                            
                                    <input name="estado" type="checkbox" class="form-control" value = "true">
                            
                            </div>
                            <!-- REGISTRAR-->
                            
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
    </div>                        
</form>

@endsection



