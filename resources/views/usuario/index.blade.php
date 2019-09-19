@extends('layouts.app')

@section('title', 'Ver - Cargos')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card" style="margin-top: 30px">
                <div class="card-header ">Nuevo Cargo</div>
                    <div class="card-body">
                        @foreach($cargo as $cargo)
                            <p>{{$cargo->nombre}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection