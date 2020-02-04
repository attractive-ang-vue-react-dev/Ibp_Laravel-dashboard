@extends('app')
@section('content')
    <div class="login-wrapper" style="background-image: url({{ URL::asset('assets/img/login-bg.jpg') }});">
        <div class="login-inner-wrap type-2">
            <div class="logo-part type-2">
                <a href="/" target="_blank"><img src="{{ URL::asset('assets/img/login-logo.svg') }}" alt=""></a>
                <p>international business platform </p>
            </div>
            {{-- <div class="card-header">{{ __('Login') }}</div> --}}

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-content">
                    <div class="input-inside type-2">
                        <label for="">Login</label>
                        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <input type="text" placeholder="{{ __('E-Mail Address') }}"> --}}
                    </div>
                    <div class="input-inside type-2">
                        <label for="">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        {{-- <input type="text" placeholder=""> --}}
                    </div>

                    {{-- <div class="input-inside type-2">

                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div> --}}

                    <div class="submit-btn">
                        {{-- <button class="round-btn submit-btn" type="submit">Login</button> --}}
                        <button type="submit" class="round-btn submit-btn"">
                            {{ __('Login') }}
                        </button>

                    </div>
                    <div class="forget-wrap">
                        @if (Route::has('password.request'))
                            <a  href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <a href="{{ route('register') }}">
                            {{ __('Registration') }}
                        </a>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection()
