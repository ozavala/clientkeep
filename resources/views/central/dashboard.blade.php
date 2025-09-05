@extends('layouts.app')

@section('title', 'Dashboard Central - ClientKeep')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Dashboard Central</h1>
            <p class="lead">Panel de administración de ClientKeep</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Empresas</h5>
                    <h2 class="text-primary">{{ $stats['total_tenants'] ?? 0 }}</h2>
                    <p class="card-text">Empresas registradas</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Empresas Activas</h5>
                    <h2 class="text-success">{{ $stats['active_tenants'] ?? 0 }}</h2>
                    <p class="card-text">Empresas con suscripción activa</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Planes Disponibles</h5>
                    <h2 class="text-info">{{ $stats['total_plans'] ?? 0 }}</h2>
                    <p class="card-text">Planes de suscripción</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Acciones Rápidas</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <a href="#" class="btn btn-primary btn-block">Gestionar Empresas</a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="#" class="btn btn-secondary btn-block">Gestionar Planes</a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="#" class="btn btn-info btn-block">Ver Facturación</a>
                        </div>
                        <div class="col-md-3 mb-3">
                            <a href="#" class="btn btn-warning btn-block">Reportes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection