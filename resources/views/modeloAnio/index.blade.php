@extends('layouts.app')

@section('title', 'Modelo Año Create')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card" style="margin-top: 30px">
                <div class="card-header text-center">Modelos de Años</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">         
                            @foreach($modelosaño as $modeloaño)
                             <li class="Años de Modelos">{{$modeloaño->año}}</li>   
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection