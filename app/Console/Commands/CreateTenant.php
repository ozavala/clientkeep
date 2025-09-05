<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Central\Tenant;
use Stancl\Tenancy\Facades\Tenancy;

class CreateTenant extends Command
{
    protected $signature = 'tenant:create {domain} {name} {email}';
    protected $description = 'Create a new tenant';

    public function handle()
    {
        $domain = $this->argument('domain');
        $name = $this->argument('name');
        $email = $this->argument('email');

        $tenant = Tenant::create([
            'id' => \Illuminate\Support\Str::uuid(),
            'name' => $name,
            'email' => $email,
            'domain' => $domain,
            'data' => [],
            'status' => true,
        ]);

        // Crear base de datos para el tenant
        Tenancy::initialize($tenant);
        
        $this->info("Tenant created successfully!");
        $this->info("Domain: " . $domain);
        $this->info("ID: " . $tenant->id);
    }
}