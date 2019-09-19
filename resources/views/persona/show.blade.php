@extends('layouts.head')

@section('title', 'Persona  Index')

@section('content')
<h2>Listado de Personas</h2>
    @foreach($persona as $personavar)
    
    <ul class="list-unstyled">
        <li class="media">
            <div class="media-body">
            <h5 class="mt-0 mb-1">{{$personavar->nombre, $personavar->correo}}</h5>
                                Representante:	{{$personavar->nombre}}<br>
						    	Pais:	{{$personavar->correo}}<br>                    
						    	Teléfono:	{{$personavar->direccion}}
            </div>
        </li>
    </ul>

    @endforeach
    
@endsection