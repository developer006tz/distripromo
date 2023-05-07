<?php

namespace App\Http\Controllers\Api;

use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\VendorResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\VendorCollection;
use App\Http\Requests\VendorStoreRequest;
use App\Http\Requests\VendorUpdateRequest;

class VendorController extends Controller
{
    public function index(Request $request): VendorCollection
    {
        $this->authorize('view-any', Vendor::class);

        $search = $request->get('search', '');

        $vendors = Vendor::search($search)
            ->latest()
            ->paginate();

        return new VendorCollection($vendors);
    }

    public function store(VendorStoreRequest $request): VendorResource
    {
        $this->authorize('create', Vendor::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        $vendor = Vendor::create($validated);

        return new VendorResource($vendor);
    }

    public function show(Request $request, Vendor $vendor): VendorResource
    {
        $this->authorize('view', $vendor);

        return new VendorResource($vendor);
    }

    public function update(
        VendorUpdateRequest $request,
        Vendor $vendor
    ): VendorResource {
        $this->authorize('update', $vendor);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($vendor->image) {
                Storage::delete($vendor->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        $vendor->update($validated);

        return new VendorResource($vendor);
    }

    public function destroy(Request $request, Vendor $vendor): Response
    {
        $this->authorize('delete', $vendor);

        if ($vendor->image) {
            Storage::delete($vendor->image);
        }

        $vendor->delete();

        return response()->noContent();
    }
}
