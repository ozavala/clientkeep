<?php

declare(strict_types=1);

return [
    'tenant_model' => App\Models\Central\Tenant::class,
    'id_generator' => Stancl\Tenancy\UUIDGenerator::class,

    'central_domains' => [
        env('CENTRAL_DOMAIN'),
    ],

    'identification' => [
        'default' => Stancl\Tenancy\Resolvers\DomainTenantResolver::class,
        'drivers' => [
            'domain' => Stancl\Tenancy\Resolvers\DomainTenantResolver::class,
        ],
    ],

    'database' => [
        'based_on' => 'tenant',
        'prefix' => 'clientkeep_',
        'suffix' => '',
        'separate_by' => 'database',
    ],

    'bootstrappers' => [
        Stancl\Tenancy\Bootstrappers\DatabaseTenancyBootstrapper::class,
        Stancl\Tenancy\Bootstrappers\CacheTenancyBootstrapper::class,
        Stancl\Tenancy\Bootstrappers\FilesystemTenancyBootstrapper::class,
        Stancl\Tenancy\Bootstrappers\QueueTenancyBootstrapper::class,
    ],

    'features' => [
        Stancl\Tenancy\Features\UserImpersonation::class,
        Stancl\Tenancy\Features\TelescopeTags::class,
        Stancl\Tenancy\Features\UniversalRoutes::class,
        Stancl\Tenancy\Features\TenantConfig::class,
        Stancl\Tenancy\Features\CrossDomainRedirect::class,
    ],

    'storage_to_config_map' => [
        // 'paypal_api_key' => 'services.paypal.api_key',
    ],

    'home_url' => '/dashboard',

    'queue_database_creation' => false,
    'queue_database_deletion' => false,

    'migrate_after_creation' => true,
    'migration_parameters' => [
        '--force' => true,
    ],

    'seed_after_migration' => false,
    'seeder_parameters' => [
        '--class' => 'DatabaseSeeder',
    ],

    'delete_database_after_tenant_deletion' => true,

    'unique_id_generator' => true,
];