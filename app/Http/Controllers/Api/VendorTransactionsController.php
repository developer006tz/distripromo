<?php

namespace App\Http\Controllers\Api;

use App\Models\Vendor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionResource;
use App\Http\Resources\TransactionCollection;

class VendorTransactionsController extends Controller
{
    public function index(
        Request $request,
        Vendor $vendor
    ): TransactionCollection {
        $this->authorize('view', $vendor);

        $search = $request->get('search', '');

        $transactions = $vendor
            ->transactions()
            ->search($search)
            ->latest()
            ->paginate();

        return new TransactionCollection($transactions);
    }

    public function store(Request $request, Vendor $vendor): TransactionResource
    {
        $this->authorize('create', Transaction::class);

        $validated = $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'order_id' => ['required', 'exists:orders,id'],
            'amount' => ['required', 'numeric'],
            'date' => ['required', 'date'],
            'status' => ['required', 'in:pending,complete,failed'],
        ]);

        $transaction = $vendor->transactions()->create($validated);

        return new TransactionResource($transaction);
    }
}
