@extends('layouts.app')

@section('title', 'Edit a city')

@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

@endpush

@section('content')
<section>
    <div class="container">
        <h1>Edit a city | {{$city->name}}</h1>
        <div class="mb-3">
        <form action="{{ route('admin.cities.update' , $city) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="form-group">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" class="form-control" value={{old('name', $city->name)}} id="name" name="name">
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <div class="mb-3">
   </div>
</section>
@endsection


