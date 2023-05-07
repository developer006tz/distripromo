<?php

namespace App\Http\Controllers\Api;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\MessageResource;
use App\Http\Resources\MessageCollection;
use App\Http\Requests\MessageStoreRequest;
use App\Http\Requests\MessageUpdateRequest;

class MessageController extends Controller
{
    public function index(Request $request): MessageCollection
    {
        $this->authorize('view-any', Message::class);

        $search = $request->get('search', '');

        $messages = Message::search($search)
            ->latest()
            ->paginate();

        return new MessageCollection($messages);
    }

    public function store(MessageStoreRequest $request): MessageResource
    {
        $this->authorize('create', Message::class);

        $validated = $request->validated();

        $message = Message::create($validated);

        return new MessageResource($message);
    }

    public function show(Request $request, Message $message): MessageResource
    {
        $this->authorize('view', $message);

        return new MessageResource($message);
    }

    public function update(
        MessageUpdateRequest $request,
        Message $message
    ): MessageResource {
        $this->authorize('update', $message);

        $validated = $request->validated();

        $message->update($validated);

        return new MessageResource($message);
    }

    public function destroy(Request $request, Message $message): Response
    {
        $this->authorize('delete', $message);

        $message->delete();

        return response()->noContent();
    }
}
