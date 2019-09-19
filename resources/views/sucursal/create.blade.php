@extends('layouts.head')

@section('label','Sucursal')

@section('title','Nueva Sucursal')

@section('content')

<form class="form-group" method="POST" action="/admin/sucursales" enctype="multipart/form-data">
                        
    {{@csrf_field()}}
  
    <div class="form-group">
        <label for="ubicacion" class="col-md-4 col-form-label text-md-right">Dirección</label>
        <input name="ubicacion" type="text" class="form-control">
    </div>


    <div class="form-group">
        <label for="">Ubicacion</label>
                <select id='ubicacion'name="id_ubicacion" class="form-control" type="number">
               <option value="" type="">Seleccione una Ubicacion</option>
                    @foreach($ubicaciones as $ubicacion)
                            <option value="{{$ubicacion->id}}" type="number"> {{$ubicacion->descripcion}}</option>
                    @endforeach
                </select> 
        <a href='/admin/ubicaciones/create'class="btn">
            Añadir Ubicación
        </a>
    </div>

    <div class="form-group">
        <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>

        <input name="estado" type="checkbox" class="form-control" value = "true">
    </div>
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            Registrar
        </button>
    </div>
                           
 </form>

@endsection
