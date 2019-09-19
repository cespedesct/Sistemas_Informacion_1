@extends('layouts.head')

@section('label','Motivo')

@section('title','Añadir Motivo')

@section('content')

<form class="form-group" method="POST" action="/motivos" enctype="multipart/form-data">                        
     {{@csrf_field()}}
                            <!-- UBICACION-->
    <div class="form-group">
         <!-- NOMBRE DESCRIPCION-->
        <label for="descripcion" class="col-md-4 col-form-label text-md-right">Descripcion</label>                            
        <input style="height: 50px; width:400px"name="descripcion" type="text" class="form-control">
        <!-- REGISTRAR-->
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </div>                   
    </div>                        
</form>
@endsection