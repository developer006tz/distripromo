<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\SentMessageResource;
use App\Http\Resources\SentMessageCollection;

class UserSentMessagesController extends Controller
{
    public function index(Request $request, User $user): SentMessageCollection
    {
        $this->authorize('view', $user);

        $search = $request->get('search', '');

        $sentMessages = $user
            ->sentMessages()
            ->search($search)
            ->latest()
            ->paginate();

        return new SentMessageCollection($sentMessages);
    }

    public function store(Request $request, User $user): SentMessageResource
    {
        $this->authorize('create', SentMessage::class);

        $validated = $request->validate([
            'message_id' => ['required', 'exists:messages,id'],
            'phone' => ['required', 'max:255', 'string'],
            'status' => ['required', 'in:0,1,2,3,4'],
            'date' => ['nullable', 'date'],
        ]);

        $sentMessage = $user->sentMessages()->create($validated);

        return new SentMessageResource($sentMessage);
    }
}
