@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">{{ __('CONTROL DE GASTOS') }} <br> {{ __('Inicio de sesion exitoso :D') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   
                <img src="https://muybien.ar/wp-content/uploads/2021/04/bienvenidos-1.png" width="300px" style="margin-left: 24%;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
