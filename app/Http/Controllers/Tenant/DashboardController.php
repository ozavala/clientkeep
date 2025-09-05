<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the tenant dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Aquí irán las estadísticas del tenant específico
        // Por ahora solo retornamos la vista básica
        
        $stats = [
            // Ejemplo de estadísticas que podrías agregar después:
            // 'total_clients' => \App\Models\Tenant\Client::count(),
            // 'total_products' => \App\Models\Tenant\Product::count(),
            // 'pending_invoices' => \App\Models\Tenant\Invoice::where('status', 'pending')->count(),
        ];

        return view('tenant.dashboard', compact('stats'));
    }
}