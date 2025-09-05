<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the central dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Puedes agregar lógica para mostrar estadísticas del sistema
        // como número de tenants, usuarios, etc.
        
        $stats = [
            'total_tenants' => \App\Models\Central\Tenant::count(),
            'active_tenants' => \App\Models\Central\Tenant::where('status', true)->count(),
            'total_plans' => \App\Models\Central\Plan::count(),
        ];

        return view('central.dashboard', compact('stats'));
    }
}