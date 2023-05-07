<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Message;
use Illuminate\View\View;
use App\Models\SentMessage;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\SentMessageStoreRequest;
use App\Http\Requests\SentMessageUpdateRequest;

class SentMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $this->authorize('view-any', SentMessage::class);

        $search = $request->get('search', '');

        $sentMessages = SentMessage::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.sent_messages.index',
            compact('sentMessages', 'search')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request): View
    {
        $this->authorize('create', SentMessage::class);

        $messages = Message::pluck('body', 'id');
        $users = User::pluck('name', 'id');

        return view('app.sent_messages.create', compact('messages', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SentMessageStoreRequest $request): RedirectResponse
    {
        $this->authorize('create', SentMessage::class);

        $validated = $request->validated();

        $sentMessage = SentMessage::create($validated);

        return redirect()
            ->route('sent-messages.edit', $sentMessage)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, SentMessage $sentMessage): View
    {
        $this->authorize('view', $sentMessage);

        return view('app.sent_messages.show', compact('sentMessage'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, SentMessage $sentMessage): View
    {
        $this->authorize('update', $sentMessage);

        $messages = Message::pluck('body', 'id');
        $users = User::pluck('name', 'id');

        return view(
            'app.sent_messages.edit',
            compact('sentMessage', 'messages', 'users')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(
        SentMessageUpdateRequest $request,
        SentMessage $sentMessage
    ): RedirectResponse {
        $this->authorize('update', $sentMessage);

        $validated = $request->validated();

        $sentMessage->update($validated);

        return redirect()
            ->route('sent-messages.edit', $sentMessage)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(
        Request $request,
        SentMessage $sentMessage
    ): RedirectResponse {
        $this->authorize('delete', $sentMessage);

        $sentMessage->delete();

        return redirect()
            ->route('sent-messages.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
