@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Dashboard Central</h1>
            <p>Bienvenido al panel de administración de ClientKeep.</p>
            
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Empresas</h5>
                            <p class="card-text">Gestiona las empresas registradas en la plataforma.</p>
                            <a href="#" class="btn btn-primary">Ver empresas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Planes</h5>
                            <p class="card-text">Configura los planes de suscripción disponibles.</p>
                            <a href="#" class="btn btn-primary">Ver planes</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Facturación</h5>
                            <p class="card-text">Monitorea las suscripciones y pagos.</p>
                            <a href="#" class="btn btn-primary">Ver facturación</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection