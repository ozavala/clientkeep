@extends('layouts.app')

@section('title', 'Suscripciones - ClientKeep')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1>Suscripciones</h1>
                <a href="{{ route('central.subscriptions.create') }}" class="btn btn-primary">
                    Nueva Suscripción
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Tenant</th>
                                    <th>Plan</th>
                                    <th>Estado</th>
                                    <th>Inicio</th>
                                    <th>Fin</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($subscriptions as $subscription)
                                    <tr>
                                        <td>{{ $subscription->tenant->name }}</td>
                                        <td>{{ $subscription->plan->name }}</td>
                                        <td>
                                            <span class="badge bg-{{ $subscription->status === 'active' ? 'success' : ($subscription->status === 'trial' ? 'info' : 'secondary') }}">
                                                {{ ucfirst($subscription->status) }}
                                            </span>
                                        </td>
                                        <td>{{ $subscription->starts_at?->format('d/m/Y') }}</td>
                                        <td>{{ $subscription->ends_at?->format('d/m/Y') }}</td>
                                        <td>
                                            <a href="{{ route('central.subscriptions.show', $subscription) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                                            <a href="{{ route('central.subscriptions.edit', $subscription) }}" class="btn btn-sm btn-outline-warning">Editar</a>
                                            <form action="{{ route('central.subscriptions.destroy', $subscription) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">No hay suscripciones registradas</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                    {{ $subscriptions->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection