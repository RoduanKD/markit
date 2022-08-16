@extends('layouts.app')

@section('title', 'Edit a country')



@section('content')
<section>
    <div class="container">
        <h1>Edit a country | {{$country->name}}</h1>
        <div class="mb-3">
        <form action="{{ route('admin.cities.update' , $country) }}" method="post" enctype="multipart/form-data">
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
                <input type="text" class="form-control" value={{old('name', $country->name)}} id="name" name="name">
              </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          <div class="mb-3">
   </div>
</section>
@endsection


