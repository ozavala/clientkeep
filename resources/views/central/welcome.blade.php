@extends('central.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Welcome to ClientKeep') }}</div>

                <div class="card-body">
                    <h2>ClientKeep - CRM/ERP SaaS</h2>
                    <p>Gestiona tus clientes, ventas e inventario en una plataforma unificada.</p>
                    
                    <div class="mt-4">
                        <a href="{{ route('central.login') }}" class="btn btn-primary">Iniciar Sesión</a>
                        <a href="{{ route('central.register') }}" class="btn btn-secondary">Registrarse</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection