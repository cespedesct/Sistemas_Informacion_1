@extends('layouts.app')

@section('title', 'Proveedor Edit')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top: 30px">
                <div class="card-header ">Nuevo Proveedor</div>
                    <div class="card-body">
                        <form class="form-group" method="POST" action ="/proveedors/{{$proveedor->id}}" enctype="multipart/form-data">
                            @method('PATCH')
                            @csrf
                            <!-- NOMBRE PROVEEDOR-->
                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-7">
                                    <input name="nombre" value = "{{$proveedor->nombre}}" type="text" class="form-control">
                                </div>
                            </div>
                            <!-- NOMBRE REPRESENTANTE PROVEEDOR -->
                            <div class="form-group row">
                                <label for="representante" class="col-md-4 col-form-label text-md-right">Representante</label>

                                <div class="col-md-7">
                                    <input name="representante" value = "{{$proveedor->representante}}" type="text" class="form-control">
                                </div>
                            </div>
                            <!-- PAIS PROVEEDOR -->
                            <div class="form-group row">
                                <label for="pais" class="col-md-4 col-form-label text-md-right">País</label>

                                <div class="col-md-7">
                                    <input name="pais" value = "{{$proveedor->pais}}" type="text" class="form-control">
                                </div>
                            </div>
                            <!-- TELEFONO PROVEEDOR -->
                            <div class="form-group row">
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">Teléfono</label>

                                <div class="col-md-7">
                                    <input name="telefono" value = "{{$proveedor->telefono}}" type="number" class="form-control">
                                </div>
                            </div>
                            <!--AVATAR PROVEEDOR OJO-->
                            <div class="form-group row">
                                <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>

                                <div class="col-md-7">
                                    <input type="file" name = "avatar">
                                </div>
                            </div>
                            <!-- ESTADO PROVEEDOR -->
                            <!-- REGISTRAR PROVEEDOR-->
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        Actualizar
                                    </button>
                                </div>
                            </div>                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection