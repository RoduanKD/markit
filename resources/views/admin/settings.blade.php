@extends('layouts.app')
@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('settings.update') }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <div class="page-pretitle" style="padding-top: 20px">
                    {{ $settings->site_name }}
                </div>
                <h2 class="page-title" style="padding-bottom: 20px">
                    Settings
                </h2>
                <fieldset class="form-fieldset" style="background-color: white">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Site Name</label>
                                    <input type="text" class="form-control" @error('site_name') is-invalid @enderror
                                        name="site_name" placeholder="site name"
                                        value="{{ old('site_name', $settings->site_name) }}" style="flex-direction: row;">
                                    @error('site_name')
                                        <div class="invalid-feedback">error</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Locale </label>
                                    <input type="text" class="form-control" @error('locale') is-invalid @enderror
                                        name="locale" placeholder="locale" value="{{ old('locale', $settings->locale) }}">
                                    @error('locale')
                                        <div class="invalid-feedback">error</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Color picker</label>
                                    <input type="color" name="color" class="form-control-color"
                                        value="{{ old('color', $settings->color) }}" style="width: 100%;">
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-3">
                                    <label class="form-label">Email </label>
                                    <input type="email" class="form-control" @error('email') is-invalid @enderror
                                        name="email" placeholder="email" value="{{ old('email', $settings->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback">error</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Link </label>
                            <input type="text" class="form-control" @error('link') is-invalid @enderror name="link"
                                value="{{ old('link', $settings->link) }}">
                            @error('link')
                                <div class="invalid-feedback">error</div>
                            @enderror
                            <br>
                            <div class="mb-3">
                                <label class="form-label">contact_info </label>
                                <textarea class="form-control" @error('contact_info') is-invalid @enderror name="contact_info" rows="4"
                                    placeholder="Contact.."> {{ old('contact_info', $settings->contact_info) }}</textarea>
                                @error('contact_info')
                                    <div class="invalid-feedback">error</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">delivery_policy </label>
                                <textarea class="form-control" @error('delivery_policy') is-invalid @enderror name="delivery_policy" rows="4">{{ old('delivery_policy', $settings->delivery_policy) }}</textarea>
                                @error('delivery_policy')
                                    <div class="invalid-feedback">error</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">condition </label>
                                <textarea cols="40" class="form-control" @error('condition') is-invalid @enderror name="condition" rows="4">{{ old('condition', $settings->condition) }}</textarea>
                                @error('condition')
                                    <div class="invalid-feedback">error</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                </fieldset>
        </form>
    </div>
@endsection
