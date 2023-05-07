<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\SocialMediaPlatform;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ServiceStoreRequest;
use App\Http\Requests\ServiceUpdateRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', Service::class);

        $search = $request->get('search', '');

        $services = Service::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.services.index', compact('services', 'search'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', Service::class);

        $socialMediaPlatforms = SocialMediaPlatform::pluck('name', 'id');

        return view('app.services.create', compact('socialMediaPlatforms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', Service::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        $service = Service::create($validated);

        return redirect()
            ->route('services.edit', $service)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Service $service): View
    {
        $this->authorize('view', $service);

        return view('app.services.show', compact('service'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Service $service): View
    {
        $this->authorize('update', $service);

        $socialMediaPlatforms = SocialMediaPlatform::pluck('name', 'id');

        return view(
            'app.services.edit',
            compact('service', 'socialMediaPlatforms')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        ServiceUpdateRequest $request,
        Service $service
    ): RedirectResponse {
        $this->authorize('update', $service);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::delete($service->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        $service->update($validated);

        return redirect()
            ->route('services.edit', $service)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        Service $service
    ): RedirectResponse {
        $this->authorize('delete', $service);

        if ($service->image) {
            Storage::delete($service->image);
        }

        $service->delete();

        return redirect()
            ->route('services.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
