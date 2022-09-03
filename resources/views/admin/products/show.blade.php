@extends('layouts.app')

@section('title' . ' - ' . $product->name)

@section('content')
    <section>
        <div class="container my-5">
            <div class="card my-2 shadow bg-white rounded">
                <div class="card-body">
                    <h1 class="card-title"> {{ $product->name }}</h1>
                </div>
            </div>
            <div class="card mb-3">
                @foreach ($product->getMedia() as $media)
                    {{ $media }}
                @endforeach

                <div class="card-body">
                    <h1 class="card-title text-primary"> Basic Info </h1>
                    <p class="card-text">
                    <h4>PRICE:</h4> {{ $product->price }} SYP <br>
                    {{-- <h4>COLOR:</h4> {{ $product->colors->reduce(function ($carry, $color) {return $carry . $color->name . ', ';}) }} <br> --}}
                    {{-- <h4>COUNTRY:</h4>{{ $car->country }} <br> --}}
                    <h4>MORE DETIALS:</h4> {!! $product->description !!} <br>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
<style scoped>
    h4 {
        display: inline;
    }
</style>
