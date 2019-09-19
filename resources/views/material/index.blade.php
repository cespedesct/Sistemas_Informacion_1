@extends('layouts.app')

@section('title', 'Proveedor Create')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card" style="margin-top: 30px">
                <div class="card-header text-center">Materiales</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">         
                            @foreach($materiales as $material)
                             <li class="Nombre Material">{{$material->nombre}}</li>   
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection