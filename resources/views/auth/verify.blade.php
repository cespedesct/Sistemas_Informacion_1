@extends('layouts.head')
@section('title','Verifica tu email')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Un enlace de verificación nuevo ha sido enviado a tu dirección de email.') }}
                        </div>
                    @endif

                    {{ __('Antes de continuar, por favor accede al enlace de verificion en tu bandeja de entrada.') }}
                    {{ __('Sino recibiste este email') }}, <a href="{{ route('verification.resend') }}">{{ __('haz click aquí para solicitar otro') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
