@extends('app')
@section('content')

    <div class="login-wrapper" style="background-image: url({{ URL::asset('assets/img/login-bg.jpg') }});">
        <div class="login-inner-wrap">
            <div class="logo-part">
                <a href="/" target="_blank"><img src="{{ URL::asset('assets/img/login-logo.svg') }}" alt=""></a>
                <h5>REGISTRATION</h5>
            </div>
            <div class="tabContainer">
                <nav>
                    <div class="nav nav-link-wrap" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="tbOne-tab" data-toggle="tab" href="#tbOne" role="tab" aria-controls="nav-home" aria-selected="true">STEP 1</a>
                        <a class="nav-item nav-link" id="tbTwo-tab" data-toggle="tab" href="#tbTwo" role="tab" aria-controls="nav-profile" aria-selected="false">STEP 2</a>
                    </div>
                </nav>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="tab-content" id="nav-tabContent">

                                <div class="tab-pane fade show active" id="tbOne" role="tabpanel" aria-labelledby="tbOne-tab">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                                    <div class="tb-content-wrap">
                                            <div class="form-content">
                                                <div class="input-inside">
                                                    <input type="text" id="first_name" class=" @error('first_name') is-invalid @enderror"  name="first_name" value="{{ old('first_name') }}"
                                                    required autocomplete="first_name" autofocus placeholder="{{ __('FIRST NAME') }}">
                                                </div>
                                                <div class="input-inside">
                                                    <input type="text" id="last_name"  name="last_name" value="{{ old('last_name') }}"
                                                    required autocomplete="last_name" placeholder="{{ __('LAST NAME')}}">
                                                </div>

                                                <div class="input-inside">

                                                    <input type="tel" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"
                                                    required  value="{{ old('phone_number') }}"  placeholder="{{ _('PHONE NUMBER e.g +191098765432') }}">
                                                </div>
                                                <div class="input-inside">

                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('EMAIL') }}">
                                                    <span class="input-trans"><img src="{{ URL::asset('assets/img/msg.png') }}" alt=""></span class="input-trans">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="submit-btn">
                                                    <button class="round-btn submit-btn" id="tbThree-tab">{{ _('NEXT') }}</button>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tbTwo" role="tabpanel" aria-labelledby="tbTwo-tab">
                                    <div class="tb-content-wrap">
                                            <div class="form-content">
                                                <div class="input-inside">

                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="{{ __('PASSWORD') }}"">
                                                    <span class="input-trans"><img src="{{ URL::asset('assets/img/lock.png') }}" alt=""></span>

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="input-inside">


                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="confirm-password" placeholder="{{ __('CONFIRM PASSWORD') }}">
                                                <span class="input-trans"><img src="{{ URL::asset('assets/img/lock.png') }}" alt=""></span>

                                                    @error('password_confirmation')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>

                                                <div class="input-inside">
                                                    <input type="text" id="company_name" name="company_name" placeholder="{{ _('COMPANY NAME') }}">
                                                </div>
                                                <div class="input-inside">
                                                    <input type="text" id="company_address" name="company_address" placeholder="{{ _('COMPANY ADDRESS') }}">
                                                    <span class="input-trans"><img src="{{ URL::asset('assets/img/lock-2.png') }}" alt=""></span>
                                                </div>
                                                <div class="input-inside">
                                                    <label class="checkBox">
                                                        I accept to receive communications by email from ibpbio.
                                                        <input type="checkbox">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="submit-btn">
                                                    <button class="round-btn submit-btn" type="submit">{{ __('NEXT') }}</button>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                        </div>
                    </form>

            </div>
        </div>
@endsection()
