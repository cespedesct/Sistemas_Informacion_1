@extends('layouts.head')

@section('title', 'Añadir Tipo de Producto')
@section('label','Tipo de Producto')

@section('content')

<form class="form-group" method="POST" action ="/tipo_productos" enctype="multipart/form-data">
                            @csrf
                            <!-- NOMBRE PROVEEDOR-->
                            <div class="form-group">
                                <label for="nombre">Nombre</label>

                                <div class="col-md-7">
                                    <input name="nombre" type="text" class="form-control">
                                </div>
                            </div>
                            <!--AVATAR PROVEEDOR OJO-->
                            <div class="form-group">
                                <label for="avatar" class="col-md-4 col-form-label text-md-right">avatar</label>

                                <div class="col-md-7">
                                    <input type="file" name = "avatar">
                                </div>
                            </div>
                            <!-- ESTADO PROVEEDOR -->
                            <div class="form-group">
                                <label for="estado" class="col-md-4 col-form-label text-md-right">Estado</label>

                                <div class="col-md-1">
                                    <input name="estado" type="checkbox" class="form-control" value = "true">
                                </div>
                            </div>
                            <!-- RELACIONAR SEGMENTOS-->
                            <label for="estado" class="col-md-4 col-form-label text-md-right">Segmento</label>

                            <select name="segemento_id" class="form-control" type="number">
                                @foreach($segmentos as $segmento)
                                        <option value="{{$segmento->id}}" type="number"> {{$segmento->nombre}}</option>
                                @endforeach
                            </select> 
                            
                            <a class="btn pocenter" href="/segmentos/create">Nuevo Segmento</a>
                         
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