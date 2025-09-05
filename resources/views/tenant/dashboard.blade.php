@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard de {{ app('tenant')->name ?? 'tu empresa' }}</h1>
            <p>Bienvenido al panel de gestión empresarial.</p>
            
            <div class="row mt-4">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Clientes</h5>
                            <p class="card-text">Gestiona tus clientes y contactos.</p>
                            <a href="#" class="btn btn-primary">Ver clientes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Productos</h5>
                            <p class="card-text">Catálogo de productos e inventario.</p>
                            <a href="#" class="btn btn-primary">Ver productos</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Ventas</h5>
                            <p class="card-text">Cotizaciones, órdenes y facturas.</p>
                            <a href="#" class="btn btn-primary">Ver ventas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Reportes</h5>
                            <p class="card-text">Análisis y estadísticas.</p>
                            <a href="#" class="btn btn-primary">Ver reportes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection