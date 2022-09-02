@extends('layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        {{ config('app.name') }}
                    </div>
                    <h2 class="page-title">
                        {{ __('My Products') }}
                    </h2>
                    <h3><a href="{{ route('products.create') }}" class="text-primary ">Add more!</a></h3>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-2">
                <div class="card cardhov my-2">

                    {{ $product->getFirstMedia() }}

                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <a href="{{ route('products.show', $product) }}" class="text-primary"> show more
                            info
                        </a>
                        <div class="row my-2">
                            <div class="col">
                                <a class="btn ma-2" href="{{ route('products.edit', $product) }}"
                                    style="background-color: #161C34; color:white;">
                                    Edit
                                </a>
                            </div>
                            <div class="col">
                                <button style="background-color: #F36B2A; color:white;" class="btn mb-2" data-toggle="modal"
                                    data-target="#delete-modal">Delete</button>
                                <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">DELETE THIS PRODUCTS
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ARE YOU SURE YOU WANT TO DELETE THIS PRODUCTS!
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <form action="{{ route('products.destroy', $product) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button style="background-color: #F36B2A; color:white;" class="btn mb-2"
                                                        type="submit" data-toggle="modal" data-target="#exampleModal">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row justify-content-center">
        {{ $products->withQueryString() }}
    </div>
@endsection
@push('css')
    <style>
        .card:hover {
            border-radius: 0.75rem;
            border-color: #161C34;
            transition-delay: 0.1s
        }

        h1 {
            color: #161C34;
        }
    </style>
@endpush
