@extends('layouts.app')

@section('content')
<div class="container-fluid"> <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4> Create</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('vendors')}}">vendors</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">create</a></li>
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

            <x-form
                method="POST"
                action="{{ route('vendors.store') }}"
                has-files
                class="mt-4"
            >
                @include('app.vendors.form-inputs')

                <div class="mt-4">
                    <a
                        href="{{ route('vendors.index') }}"
                        class="btn btn-light"
                    >
                        <i class="icon ion-md-return-left text-primary"></i>
                        @lang('crud.common.back')
                    </a>

                    <button type="submit" class="btn btn-primary float-right">
                        <i class="icon ion-md-save"></i>
                        @lang('crud.common.create')
                    </button>
                </div>
            </x-form>
        </div>
    </div>
</div>
@endsection
