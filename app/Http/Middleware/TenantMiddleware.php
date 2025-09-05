<?php

namespace App\Http\Middleware;

use Closure;
use Stancl\Tenancy\Facades\Tenancy;
use App\Models\Central\Tenant; // ✅ Namespace correcto

class TenantMiddleware
{
    public function handle($request, Closure $next)
    {
        $domain = $request->getHost();
        
        // Verificar si es dominio central
        if (in_array($domain, config('tenancy.central_domains', []))) {
            return $next($request);
        }

        // Buscar tenant por dominio
        $tenant = Tenant::whereDomain($domain)->first(); // ✅ Usar Tenant directamente
        
        if (!$tenant || !$tenant->status) {
            abort(404);
        }

        // Inicializar tenancy
        try {
            Tenancy::initialize($tenant);
        } catch (\Exception $e) {
            abort(404);
        }

        return $next($request);
    }
}