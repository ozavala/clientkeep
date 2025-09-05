<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'tenant_id', 'plan_id', 'starts_at', 'ends_at', 'status', 'payment_method', 'stripe_id'
    ];

    protected $casts = [
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
        'price' => 'decimal:2'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function isActive()
    {
        return $this->status === 'active' && 
               $this->ends_at && 
               $this->ends_at->isFuture();
    }

    public function isTrial()
    {
        return $this->status === 'trial' && 
               $this->ends_at && 
               $this->ends_at->isFuture();
    }
}