@extends('layouts.app')

@section('content')
<div class="container-xl">
    <!-- Page title -->
    <div class="page-header d-print-none">
        <div class="row align-items-center">
            <div class="col">
            <!-- Page pre-title -->
            <div class="page-pretitle">
                {{ 'Mark-It' }}
            </div>
                <h2 class="page-title">
                    {{ __('My Products') }}
                </h2>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">

        {{ old('products') ? 'there is data' : 'there isnt data' }}



























    </div>

    @endsection
