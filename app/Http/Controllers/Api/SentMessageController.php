<?php

namespace App\Http\Controllers\Api;

use App\Models\SentMessage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\SentMessageResource;
use App\Http\Resources\SentMessageCollection;
use App\Http\Requests\SentMessageStoreRequest;
use App\Http\Requests\SentMessageUpdateRequest;

class SentMessageController extends Controller
{
    public function index(Request $request): SentMessageCollection
    {
        $this->authorize('view-any', SentMessage::class);

        $search = $request->get('search', '');

        $sentMessages = SentMessage::search($search)
            ->latest()
            ->paginate();

        return new SentMessageCollection($sentMessages);
    }

    public function store(SentMessageStoreRequest $request): SentMessageResource
    {
        $this->authorize('create', SentMessage::class);

        $validated = $request->validated();

        $sentMessage = SentMessage::create($validated);

        return new SentMessageResource($sentMessage);
    }

    public function show(
        Request $request,
        SentMessage $sentMessage
    ): SentMessageResource {
        $this->authorize('view', $sentMessage);

        return new SentMessageResource($sentMessage);
    }

    public function update(
        SentMessageUpdateRequest $request,
        SentMessage $sentMessage
    ): SentMessageResource {
        $this->authorize('update', $sentMessage);

        $validated = $request->validated();

        $sentMessage->update($validated);

        return new SentMessageResource($sentMessage);
    }

    public function destroy(
        Request $request,
        SentMessage $sentMessage
    ): Response {
        $this->authorize('delete', $sentMessage);

        $sentMessage->delete();

        return response()->noContent();
    }
}
