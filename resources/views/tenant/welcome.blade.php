@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>
                <div class="card-body">
                    <h2>{{ app('tenant')->name ?? 'Tu Empresa' }}</h2>
                    <p>Plataforma de gestión empresarial ClientKeep.</p>
                    <div class="mt-4">
                        @auth
                            <a href="{{ route('tenant.dashboard') }}" class="btn btn-primary">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-primary">Iniciar Sesión</a>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection