<?php

namespace App\Http\Controllers\Central;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Central\Subscription;
use App\Models\Central\Tenant;
use App\Models\Central\Plan;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscriptions = Subscription::with(['tenant', 'plan'])->latest()->paginate(10);
        return view('central.subscriptions.index', compact('subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tenants = Tenant::all();
        $plans = Plan::all();
        return view('central.subscriptions.create', compact('tenants', 'plans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tenant_id' => 'required|exists:tenants,id',
            'plan_id' => 'required|exists:plans,id',
            'starts_at' => 'nullable|date',
            'ends_at' => 'nullable|date',
            'status' => 'required|in:trial,active,cancelled,expired',
            'payment_method' => 'nullable|string|max:50',
        ]);

        $subscription = Subscription::create($request->all());

        return redirect()->route('central.subscriptions.index')
                        ->with('success', 'Suscripción creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        $subscription->load(['tenant', 'plan']);
        return view('central.subscriptions.show', compact('subscription'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscription $subscription)
    {
        $tenants = Tenant::all();
        $plans = Plan::all();
        $subscription->load(['tenant', 'plan']);
        return view('central.subscriptions.edit', compact('subscription', 'tenants', 'plans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscription $subscription)
    {
        $request->validate([
            'tenant_id' => 'required|exists:tenants,id',
            'plan_id' => 'required|exists:plans,id',
            'starts_at' => 'nullable|date',
            'ends_at' => 'nullable|date',
            'status' => 'required|in:trial,active,cancelled,expired',
            'payment_method' => 'nullable|string|max:50',
        ]);

        $subscription->update($request->all());

        return redirect()->route('central.subscriptions.index')
                        ->with('success', 'Suscripción actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();

        return redirect()->route('central.subscriptions.index')
                        ->with('success', 'Suscripción eliminada exitosamente.');
    }
}