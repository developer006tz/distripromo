@extends('layouts.app')

@section('content')
<div class="container-fluid"> <div class="row page-titles mx-0">
        <div class="col-sm-6 p-md-0">
            <div class="welcome-text">
                <h4> @lang('crud.common.index')</h4>
            </div>
        </div>
        <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('orders')}}">orders</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">index</a></li>
            </ol>
        </div>
    </div>
    <div class="searchbar mt-0 mb-4">
        <div class="row">
            <!--create-->
            <div class="col-md-6 text-right">
                @can('create', App\Models\Order::class)
                <a href="{{ route('orders.create') }}" class="btn btn-primary">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.orders.index_title')</h4>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.orders.inputs.user_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.orders.inputs.service_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.orders.inputs.profile_link')
                            </th>
                            <th class="text-left">
                                @lang('crud.orders.inputs.date')
                            </th>
                            <th class="text-left">
                                @lang('crud.orders.inputs.status')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($orders as $order)
                        <tr>
                            <td>{{ optional($order->user)->name ?? '-' }}</td>
                            <td>
                                {{ optional($order->service)->name ?? '-' }}
                            </td>
                            <td>{{ $order->profile_link ?? '-' }}</td>
                            <td>{{ $order->date ?? '-' }}</td>
                            <td>{{ $order->status ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $order)
                                    <a
                                        href="{{ route('orders.edit', $order) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $order)
                                    <a
                                        href="{{ route('orders.show', $order) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $order)
                                    <form
                                        action="{{ route('orders.destroy', $order) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6">{!! $orders->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
