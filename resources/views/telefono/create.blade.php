@extends('layouts.head')

@section('title', 'Telefono')
@section('label','Telefono')

@section('content')

                        <form class="form-group" method="POST" action ="/telefonos" enctype="multipart/form-data">
                            @csrf
                            <!--Nombre Persona-->
                            <div class="form-group">
                                <label for="numero" class="col-md-4 col-form-label text-md-right">Numero</label>
                                <input type="number" name="numero" class="form-control">

                              <!-- RELACIONAR SEGMENTOS-->
                              <div class="form-group">
                            <select name="persona_id" class="form-control" type="number">
                                @foreach($personas as $personas)
                                        <option value="{{$personas->id}}" type="number"> {{$personas->nombre}}</option>
                                @endforeach
                            </select> 
                        </div>

                            <!-- REGISTRAR-->
                            <div class="form-group">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                </div>
                            </div>                        
                        </form>
                 
@endsection