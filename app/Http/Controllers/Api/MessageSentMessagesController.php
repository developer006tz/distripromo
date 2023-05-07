<?php

namespace App\Http\Controllers\Api;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SentMessageResource;
use App\Http\Resources\SentMessageCollection;

class MessageSentMessagesController extends Controller
{
    public function index(
        Request $request,
        Message $message
    ): SentMessageCollection {
        $this->authorize('view', $message);

        $search = $request->get('search', '');

        $sentMessages = $message
            ->sentMessages()
            ->search($search)
            ->latest()
            ->paginate();

        return new SentMessageCollection($sentMessages);
    }

    public function store(
        Request $request,
        Message $message
    ): SentMessageResource {
        $this->authorize('create', SentMessage::class);

        $validated = $request->validate([
            'user_id' => ['required', 'exists:users,id'],
            'phone' => ['required', 'max:255', 'string'],
            'status' => ['required', 'in:0,1,2,3,4'],
            'date' => ['nullable', 'date'],
        ]);

        $sentMessage = $message->sentMessages()->create($validated);

        return new SentMessageResource($sentMessage);
    }
}
