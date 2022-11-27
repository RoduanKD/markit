@extends('layouts.guest')

@section('content')
    <form class="card card-md" action="{{ route('register') }}" method="post" autocomplete="off">
        @csrf

        <div class="card-body">
            <h2 class="card-title text-center mb-4">{{ __('Create new account') }}</h2>

            <div class="mb-3">
                <label class="form-label">{{ __('First_Name') }}</label>
                <input type="text" name="firstname" class="form-control @error('firstname') is-invalid @enderror" placeholder="{{ __('FirstName') }}">
                @error('firstname')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Last_Name') }}</label>
                <input type="text" name="lastname" class="form-control @error('lastname') is-invalid @enderror" placeholder="{{ __('LastName') }}">
                @error('lastname')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('User Name') }}</label>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="{{ __('User Name') }}">
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Phone_Number') }}</label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="{{ __('Phone') }}">
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>


            <div class="mb-3">
                <label class="form-label">{{ __('Email address') }}</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('BirthDate') }}</label>
                <input type="date" name="birthdate" class="form-control @error('birthdate') is-invalid @enderror">
                @error('birthdate')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Gender :') }}</label>
                <input type="radio" name="is_male" value="1" class="form-check-input @error('gender') is-invalid @enderror">
                <label class="form-label">{{ __('Male') }}</label>
                <input type="radio" name="is_male" value="0" class="form-check-input @error('gender') is-invalid @enderror">
                <label class="form-label">{{ __('Female') }}</label>
                @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            {{-- <div class="form-group">
                <label>Your Address</label>
                <select name="area" class="form-control @error('area') is-invalid @enderror">
                    @foreach ($areas as $area)
                        <option value={{ $area->id }}>{{ $area->name }}</option>
                    @endforeach
                </select>
                <select name="country" class="form-control @error('country') is-invalid @enderror">
                    @foreach ($countries as $country)
                        <option value={{ $country->id }}>{{ $country->name }}</option>
                    @endforeach
                </select>
                <select name="city" class="form-control @error('city') is-invalid @enderror">
                    @foreach ($cities as $city)
                        <option value={{ $city->id }}>{{ $city->name }}</option>
                    @endforeach
                </select>
                <input type="text" name="description" class="form-control @error('description`') is-invalid @enderror" placeholder="{{ __('address details') }}">
                @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div> --}}

            <div class="mb-3">
                <label class="form-label">{{ __('Password') }}</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">{{ __('Repeat Password') }}</label>
                <input type="password" name="password_confirmation" class="form-control form-control-user @error('password_confirmation') is-invalid @enderror" placeholder="{{ __('Repeat Password') }}">
                @error('password_confirmation')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">{{ __('Create new account') }}</button>
            </div>
        </div>
    </form>

    @if (Route::has('login'))
    <div class="text-center text-muted mt-3">
        {{ __('Already have account?') }} <a href="{{ route('login') }}" tabindex="-1">{{ __('Sign in') }}</a>
    </div>
    @endif

@endsection
