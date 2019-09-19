@extends('layouts.head')
@section('content')


<form class="form-group" method="POST" action="/sucursales/{{$sucursal->id}}" enctype="multipart/form-data">
    @method('PATCH')               
    {{@csrf_field()}}
  
    <div class="form-group">
        <label for="ubicacion" class="col-md-4 col-form-label text-md-right">Ubicacion</label>
    <input name="ubicacion" type="text" class="form-control" value="{{$sucursal->ubicacion}}">
    </div>

    <div class="form-group">
        <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>

    <input name="estado" type="checkbox" class="form-control" value = "{{$sucursal->estado}}">
    </div>
    
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            Guardar Cambios
        </button>
    </div>
                           
 </form>
@endsection