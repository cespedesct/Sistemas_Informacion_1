


@extends('layouts.head')

@section('label', 'Almacen')
@section('title','Nuevo Almacen')

@section('content')

    <form class="form-group" method="POST" action ="/almacenes" enctype="multipart/form-data">
        @csrf
        <!--Nombre Persona-->
         <div class ="form-group">
            <label for="">Nombre</label>
            <input type="text" name="nombre" class = "form-control"> 
        </div>

              <div class="form-group">
               <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>
                <input name="estado" type="checkbox" class="form-control" value = "true">
            
                </div>

          <!-- RELACIONAR SEGMENTOS-->
          <div class="form-group">
             <label for="">Sucursal</label>
        <select name="sucursal_id" class="form-control" type="number">
            @foreach($sucursal as $sucursal)
                    <option value="{{$sucursal->id}}" type="number"> {{$sucursal->ubicacion}}</option>
            @endforeach
        </select> 
        <a class="btn" href="/sucursales/create">Nueva Sucursal</a>

        </div>

       <div class="form-group">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </div>
          
        </div>                      
    </form>

@endsection