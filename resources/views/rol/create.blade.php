
@extends('layouts.head')
@section('title','Añadir Rol')


@section('content')
<form class="form-group" method="POST" action="/roles" enctype="multipart/form-data">
                        
    {{@csrf_field()}}
  
    <div class="form-group">
        <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>
        <input name="nombre" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="descripcion" class="col-md-4 col-form-label text-md-right">Descripcion</label>

        <input name="descripcion" type="text" class="form-control">
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            Registrar
        </button>
    </div>
                           
 </form>
@endsection




