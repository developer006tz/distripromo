@extends('layouts.app')

@section('content')
<div class="container-fluid"> <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4> @lang('crud.services.create_title')</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('services')}}">services</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">create</a></li>
            </ol>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('transactions.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.transactions.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.transactions.inputs.user_id')</h5>
                    <span>{{ optional($transaction->user)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.transactions.inputs.order_id')</h5>
                    <span
                        >{{ optional($transaction->order)->profile_link ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.transactions.inputs.vendor_id')</h5>
                    <span
                        >{{ optional($transaction->vendor)->name ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.transactions.inputs.amount')</h5>
                    <span>{{ $transaction->amount ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.transactions.inputs.date')</h5>
                    <span>{{ $transaction->date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.transactions.inputs.status')</h5>
                    <span>{{ $transaction->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('transactions.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Transaction::class)
                <a
                    href="{{ route('transactions.create') }}"
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
