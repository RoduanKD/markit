@extends('layouts.app')

@section('title', 'Add New Product')

@push('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet"
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: 'Hello Bootstrap 4',
                tabsize: 2,
                height: 100
            });
        });
    </script>
@endpush

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
                        {{ __('Add Product') }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
                <div class="d-flex">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M5 12l5 5l10 -10"></path>
                        </svg>
                    </div>
                    <div>
                        {{ $message }}
                    </div>
                  </div>
                <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
            </div>
            @endif

            <form action="{{ route('products.store') }}" method="POST" class="card" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="card-body">


                    <div class="mb-3">
                        <label class="form-label required">{{ __('Name ( En )') }}</label>
                        <input type="text" name="name[en]" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" value="{{ old('name[en]') }}" required>
                    </div>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">{{ __('Name ( Ar )') }}</label>
                        <input type="text" name="name[ar]" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Name') }}" value="{{ old('name[ar]') }}" required>
                    </div>
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">{{ __('Price') }}</label>
                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror" placeholder="{{ __('price') }}" value="{{ old('price') }}" required>
                    </div>
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">{{ __('Quantity') }}</label>
                        <input type="quantity" name="quantity" class="form-control @error('quantity') is-invalid @enderror" placeholder="{{ __('New quantity') }}" value="{{ old('quantity') }}" required>
                    </div>
                    @error('quantity')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">{{ __('Category') }}</label>
                        <select multiple name="category" class="form-control @error('category') is-invalid @enderror">
                              @foreach ($categories as $category)
                                <option value={{ $category->id }}>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                     @error('categories')
                         <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">{{ __('Area') }}</label>
                        <select multiple name="area" class="form-control @error('area') is-invalid @enderror">
                              @foreach ($areas as $area)
                                <option value={{ $area->id }}>{{ $area->name }}</option>
                            @endforeach
                        </select>
                    </div>
                     @error('areas')
                         <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">{{ __('Images') }}</label>
                        <input class="form-control @error('images') is-invalid @enderror" type="file" name="images[]"
                            id="images" accept="image/*" value="{{ old('images') }}" multiple>
                        @error('images')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">{{ __('Description ( En )') }}</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description[en]" id="description"
                            rows="5">{{ old('description[en]') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">{{ __('Description ( Ar )') }}</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description[ar]" id="description"
                            rows="5">{{ old('description[ar]') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                </div>

            </form>

        </div>
    </div>

@endsection
