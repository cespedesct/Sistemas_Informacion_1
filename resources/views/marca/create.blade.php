x|@extends('layouts.head')
@section('label','Marcas')

@section('title','Nueva Marca')
@section('content')
 <form class="form-group" method="POST" action="/marcas" enctype="multipart/form-data">
            {{ csrf_field() }} 
            <div class ="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" class = "form-control"> 
            </div>

             <div class="form-group">
               <label for="">Categoria</label>
               <select name="categoria_id" class="form-control" type="number">
                 @foreach($categorias as $categoria)
                   <option value="{{$categoria->id}}" type="number"> {{$categoria->nombre}}</option>
                 @endforeach
               </select>
                     <a class="btn" href="/categorias/create">Nueva Categoria</a>
             </div>   
             <div class ="form-group">
                <label for="">Foto</label>
                <input type="file" name="avatar" >
            </div>
             <div class="form-group">
             <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>

                                <div class="col-md-1">
                                    <input name="estado" type="checkbox" class="form-control" value = "true">
                                </div>
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