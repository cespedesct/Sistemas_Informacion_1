@extends('layouts.head')
@section ('title','Bienvenido')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="body">
           

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

            
                    <nav>
                           <a href="/user" class="btn">Usuario </a>

                        @if(Auth::user()->tieneRol('Administrador'))
                           <a href="/admin" class="btn">Administrador </a>
                        @endif
                         @if(Auth::user()->tieneRol('Vendedor'))
                           <a href="/vendedor" class="btn">Vendedor</a>
                        @endif
                         @if(Auth::user()->tieneRol('Almacenero'))
                           <a href="/almacenero" class="btn">Almacenero</a>
                        @endif
                       
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
