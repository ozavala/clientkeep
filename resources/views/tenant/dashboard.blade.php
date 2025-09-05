@extends('layouts.app')

@section('title', 'Dashboard - ' . (app('tenant')->name ?? 'ClientKeep'))

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Dashboard</h1>
            @if(app()->bound('tenant'))
                <p class="lead">Bienvenido a {{ app('tenant')->name }}</p>
            @else
                <p class="lead">Bienvenido a tu panel de gestión</p>
            @endif
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Clientes</h5>
                    <h2 class="text-primary">0</h2>
                    <p class="card-text">Gestiona tus clientes</p>
                    <a href="#" class="btn btn-primary btn-sm">Ver clientes</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Productos</h5>
                    <h2 class="text-success">0</h2>
                    <p class="card-text">Catálogo de productos</p>
                    <a href="#" class="btn btn-success btn-sm">Ver productos</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Ventas</h5>
                    <h2 class="text-info">0</h2>
                    <p class="card-text">Órdenes y facturas</p>
                    <a href="#" class="btn btn-info btn-sm">Ver ventas</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h5 class="card-title">Inventario</h5>
                    <h2 class="text-warning">0</h2>
                    <p class="card-text">Control de stock</p>
                    <a href="#" class="btn btn-warning btn-sm">Ver inventario</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Módulos Principales</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-2 mb-3">
                            <a href="#" class="btn btn-outline-primary btn-block">Clientes</a>
                        </div>
                        <div class="col-md-2 mb-3">
                            <a href="#" class="btn btn-outline-success btn-block">Productos</a>
                        </div>
                        <div class="col-md-2 mb-3">
                            <a href="#" class="btn btn-outline-info btn-block">Cotizaciones</a>
                        </div>
                        <div class="col-md-2 mb-3">
                            <a href="#" class="btn btn-outline-warning btn-block">Órdenes</a>
                        </div>
                        <div class="col-md-2 mb-3">
                            <a href="#" class="btn btn-outline-danger btn-block">Facturas</a>
                        </div>
                        <div class="col-md-2 mb-3">
                            <a href="#" class="btn btn-outline-secondary btn-block">Reportes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection