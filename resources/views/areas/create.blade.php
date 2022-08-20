@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Create an area</h1>
        <form action="{{ route('areas.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            <div class="mb-3">
            <label class="form-label" for="name_en">Name in English</label>
            <input type="text" class="form-control" name="name_en">
          </div>
            <div class="mb-3">
            <label class="form-label" for="name_ar">Name in Arabic</label>
            <input type="text" class="form-control" name="name_ar">
          </div>

            <div class="mb-3">
            <label class="form-label" for="city">City</label>
            <select class="form-control" name="city">
            @foreach ($countries as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
            </select>
          </div>


            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
   </div>
</section>
@endsection


