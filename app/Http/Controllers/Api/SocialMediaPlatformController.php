<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\SocialMediaPlatform;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\SocialMediaPlatformResource;
use App\Http\Resources\SocialMediaPlatformCollection;
use App\Http\Requests\SocialMediaPlatformStoreRequest;
use App\Http\Requests\SocialMediaPlatformUpdateRequest;

class SocialMediaPlatformController extends Controller
{
    public function index(Request $request): SocialMediaPlatformCollection
    {
        $this->authorize('view-any', SocialMediaPlatform::class);

        $search = $request->get('search', '');

        $socialMediaPlatforms = SocialMediaPlatform::search($search)
            ->latest()
            ->paginate();

        return new SocialMediaPlatformCollection($socialMediaPlatforms);
    }

    public function store(
        SocialMediaPlatformStoreRequest $request
    ): SocialMediaPlatformResource {
        $this->authorize('create', SocialMediaPlatform::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        $socialMediaPlatform = SocialMediaPlatform::create($validated);

        return new SocialMediaPlatformResource($socialMediaPlatform);
    }

    public function show(
        Request $request,
        SocialMediaPlatform $socialMediaPlatform
    ): SocialMediaPlatformResource {
        $this->authorize('view', $socialMediaPlatform);

        return new SocialMediaPlatformResource($socialMediaPlatform);
    }

    public function update(
        SocialMediaPlatformUpdateRequest $request,
        SocialMediaPlatform $socialMediaPlatform
    ): SocialMediaPlatformResource {
        $this->authorize('update', $socialMediaPlatform);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($socialMediaPlatform->image) {
                Storage::delete($socialMediaPlatform->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        $socialMediaPlatform->update($validated);

        return new SocialMediaPlatformResource($socialMediaPlatform);
    }

    public function destroy(
        Request $request,
        SocialMediaPlatform $socialMediaPlatform
    ): Response {
        $this->authorize('delete', $socialMediaPlatform);

        if ($socialMediaPlatform->image) {
            Storage::delete($socialMediaPlatform->image);
        }

        $socialMediaPlatform->delete();

        return response()->noContent();
    }
}
