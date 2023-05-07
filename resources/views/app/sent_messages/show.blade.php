@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('sent-messages.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.compose_messages.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.compose_messages.inputs.message_id')</h5>
                    <span
                        >{{ optional($sentMessage->message)->body ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.compose_messages.inputs.user_id')</h5>
                    <span>{{ optional($sentMessage->user)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.compose_messages.inputs.phone')</h5>
                    <span>{{ $sentMessage->phone ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.compose_messages.inputs.status')</h5>
                    <span>{{ $sentMessage->status ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.compose_messages.inputs.date')</h5>
                    <span>{{ $sentMessage->date ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('sent-messages.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\SentMessage::class)
                <a
                    href="{{ route('sent-messages.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
