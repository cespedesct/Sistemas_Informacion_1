@extends('layouts.head')

@section('label','Recibo')

@section('title','Nueva Recibo')

@section('content')

<form class="form-group" method="POST" action="/recibos" enctype="multipart/form-data">                        
     {{@csrf_field()}}
                                    <!-- UBICACION-->
            <div class="form-group">
            <label for="fecha" class="col-md-4 col-form-label text-md-right">Fecha</label>


            <input name="fecha" type="date" class="form-control">
            </div>
        <!-- NOMBRE MONTO -->
        <div class="form-group">
        <label for="monto" class="col-md-4 col-form-label text-md-right">Monto</label>


            <input name="monto" type="float" class="form-control">
        </div>
        <!-- SALDO -->
        <div class="form-group">
        <label for="saldo" class="col-md-4 col-form-label text-md-right">Saldo</label>


            <input name="saldo" type="float" class="form-control">

        </div>
        <!-- REGISTRAR PROVEEDOR-->
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </div>
                      
      
            
</form>

@endsection



