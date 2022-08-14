@extends('layouts.guest')

@section('content')
    <form class="card card-md" action="{{ route('register') }}" method="post" autocomplete="off">
        @csrf

        <div class="card-body">
            <h2 class="card-title text-center mb-4">{{ __('Create new account') }}</h2>

            <div class="mb-3">
                <label class="form-label">{{ __('First_Name') }}</label>
                <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" placeholder="{{ __('First_Name') }}">
                @error('first_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Last_Name') }}</label>
                <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" placeholder="{{ __('Last_Name') }}">
                @error('last_name')
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
                <label class="form-label">{{ __('Gender') }}</label>
                <input type="checkbox" name="gender" value="Male" class="form-control @error('gender') is-invalid @enderror">
                <input type="checkbox" name="gender" value="Female" class="form-control @error('gender') is-invalid @enderror">
                @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Your Address') }}</label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="{{ __('address') }}">
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

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
