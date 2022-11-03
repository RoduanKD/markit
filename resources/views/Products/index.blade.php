@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <h2 class="page-title">
                {{ __('Products') }}
            </h2>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <div class="alert alert-info">
                <div class="alert-title">Sample table page</div>
            </div>

            <div class="card">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Price') }}</th>
                                <th>{{ __('Quantity') }}</th>
                                <th>{{ __('Owner') }}</th>
                                <th>{{ __('Category') }}</th>
                                <th>{{ __('Currency') }}</th>
                                <th>{{ __('Area') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $product)
                            <tr>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->owner_id }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td>{{ $product->currency_id }}</td>
                                <td>{{ $product->area_id }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @if( $products->hasPages() )
                <div class="card-footer pb-0">
                    {{ $products->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
