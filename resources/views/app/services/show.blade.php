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
                <a href="{{ route('services.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.services.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>
                        @lang('crud.services.inputs.social_media_platform_id')
                    </h5>
                    <span
                        >{{ optional($service->socialMediaPlatform)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.services.inputs.name')</h5>
                    <span>{{ $service->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.services.inputs.description')</h5>
                    <span>{{ $service->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.services.inputs.price')</h5>
                    <span>{{ $service->price ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.services.inputs.image')</h5>
                    <x-partials.thumbnail
                        src="{{ $service->image ? \Storage::url($service->image) : '' }}"
                        size="150"
                    />
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('services.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Service::class)
                <a href="{{ route('services.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
