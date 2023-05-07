<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Http\Resources\OrderCollection;

class ServiceOrdersController extends Controller
{
    public function index(Request $request, Service $service): OrderCollection
    {
        $this->authorize('view', $service);

        $search = $request->get('search', '');

        $orders = $service
            ->orders()
            ->search($search)
            ->latest()
            ->paginate();

        return new OrderCollection($orders);
    }

    public function store(Request $request, Service $service): OrderResource
    {
        $this->authorize('create', Order::class);

        $validated = $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'profile_link' => ['required', 'max:255', 'string'],
            'date' => ['required', 'date'],
            'status' => ['required', 'in:pending,on-progress,complete'],
        ]);

        $order = $service->orders()->create($validated);

        return new OrderResource($order);
    }
}
