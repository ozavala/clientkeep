<?php

namespace App\Models\Central;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'name', 'slug', 'price', 'interval', 'description', 'features', 'is_active', 'max_users'
    ];

    protected $casts = [
        'features' => 'array',
        'is_active' => 'boolean',
        'price' => 'decimal:2'
    ];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function getFeaturesAttribute($value)
    {
        return json_decode($value, true) ?? [];
    }

    public function setFeaturesAttribute($value)
    {
        $this->attributes['features'] = json_encode($value);
    }
}