@extends('layouts.head')
@section('label','Categoria')
@section('title', 'Categorias')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card" style="margin-top: 30px">
                <div class="card-header text-center">Categorias</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">         
                            @foreach($categorias as $categoria)
                             <li class="Nombre Categoria">{{$categoria->nombre}}</li>   
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection