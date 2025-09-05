<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plan; // Ruta correcta al modelo

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Plan::create([
            'name' => 'Starter',
            'slug' => 'starter',
            'price' => 29.99,
            'interval' => 'monthly',
            'description' => 'Perfecto para pequeñas empresas',
            'features' => json_encode([
                'Hasta 100 clientes',
                '5 usuarios',
                'Facturación básica',
                'Soporte por email'
            ]),
            'is_active' => true,
            'max_users' => 5
        ]);

        Plan::create([
            'name' => 'Professional',
            'slug' => 'professional',
            'price' => 79.99,
            'interval' => 'monthly',
            'description' => 'Para empresas en crecimiento',
            'features' => json_encode([
                'Clientes ilimitados',
                '20 usuarios',
                'Facturación avanzada',
                'Inventario',
                'Reportes avanzados',
                'Soporte prioritario'
            ]),
            'is_active' => true,
            'max_users' => 20
        ]);

        Plan::create([
            'name' => 'Enterprise',
            'slug' => 'enterprise',
            'price' => 199.99,
            'interval' => 'monthly',
            'description' => 'Para grandes empresas',
            'features' => json_encode([
                'Clientes ilimitados',
                'Usuarios ilimitados',
                'Facturación avanzada',
                'Inventario completo',
                'Reportes personalizados',
                'API acceso',
                'Soporte 24/7'
            ]),
            'is_active' => true,
            'max_users' => 0 // ilimitado
        ]);
    }
}