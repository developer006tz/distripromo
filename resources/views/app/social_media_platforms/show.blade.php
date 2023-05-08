@extends('layouts.app')

@section('content')
<div class="container-fluid"> <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4> @lang('crud.common.show')</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="{{url('social-media-platforms')}}">Social Media</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">show</a></li>
            </ol>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a
                    href="{{ route('social-media-platforms.index') }}"
                    class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.media_platforms.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.media_platforms.inputs.name')</h5>
                    <span>{{ $socialMediaPlatform->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.media_platforms.inputs.image')</h5>
                    <x-partials.thumbnail
                        src="{{ $socialMediaPlatform->image ? \Storage::url($socialMediaPlatform->image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.media_platforms.inputs.status')</h5>
                    <span>{{ $socialMediaPlatform->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('social-media-platforms.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\SocialMediaPlatform::class)
                <a
                    href="{{ route('social-media-platforms.create') }}"
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
