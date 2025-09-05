<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Model;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    protected $fillable = [
        'id', 'name', 'email', 'domain', 'data', 'status', 'trial_ends_at'
    ];

    protected $casts = [
        'data' => 'array',
        'trial_ends_at' => 'datetime',
        'status' => 'boolean'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function subscription()
    {
        return $this->hasOne(Subscription::class);
    }

    public function isActive()
    {
        return $this->status && 
               (!$this->subscription || $this->subscription->isActive());
    }
}