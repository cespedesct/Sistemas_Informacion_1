@extends('layouts.app')

@section('title', 'Proveedor Create')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card" style="margin-top: 30px">
                <div class="card-header ">Nuevo Nombre Producto</div>
                    <div class="card-body">
                        @foreach($nombres as $nombre)
                            <p>{{$nombre->nombre}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection