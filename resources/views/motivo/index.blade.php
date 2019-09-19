@extends('layouts.app')

@section('title', 'Motivo  Index')

@section('content')
<h2>Lista de Motivos</h2>
    @foreach($motivo as $motivovar)
    
    <ul class="list-unstyled">
        <li class="media">
            <div class="media-body">
            <h5 class="mt-0 mb-1">{{$motivovar->descripcion}}</h5>
                                
            </div>
        </li>
    </ul>

    @endforeach
@endsection