@extends('layouts.app')

@section('content')
<div class="container-fluid"> <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4>View</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('vendors')}}">vendors</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">view</a></li>
            </ol>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('vendors.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                back
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.payment_providers.inputs.name')</h5>
                    <span>{{ $vendor->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.payment_providers.inputs.image')</h5>
                    <x-partials.thumbnail
                        src="{{ $vendor->image ? \Storage::url($vendor->image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.payment_providers.inputs.status')</h5>
                    <span>{{ $vendor->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('vendors.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Vendor::class)
                <a href="{{ route('vendors.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
