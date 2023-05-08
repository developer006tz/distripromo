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
                <li class="breadcrumb-item"><a href="{{url('roles')}}">roles</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">view</a></li>
            </ol>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('roles.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.common.back_')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.roles.inputs.name')</h5>
                    <span>{{ $role->name ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('roles.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Role::class)
                <a href="{{ route('roles.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
