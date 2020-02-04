    @extends('admin.components.navigation.nav')
    @section('content')
        <main>
            <div class="main-full">
              @include('admin.components.navigation.sidebar')
                <div class="mainContent-wrap">
                    <div class="success">{{ Session::get('data') }}</div>
                    <p class="pagi-nation">{{ __('home.acc') }} > {{ __('home.accinfo') }}</p>
                    <div class="content-heading">
                        <h2>{{ __('home.accinfo') }}</h2>
                    </div>
                    <div class="main-content">

                        @php

                        $user = Auth::user();

                        @endphp

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="/user/update/{{ $user->id }}" enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            <div class="input-inside type-2">
                                <label for="">{{ __('home.f_name') }}</label>
                                <input type="text" id="first_name" class=" @error('first_name') is-invalid @enderror"  name="first_name" value="{{ $user->first_name }}"
                                required autocomplete="first_name" autofocus placeholder="{{ __('home.f_name') }}">
                            </div>
                            <div class="input-inside type-2">
                                <label for="">{{ __('home.l_name') }}</label>
                                <input type="text" id="last_name" class=" @error('last_name') is-invalid @enderror"  name="last_name" value="{{ $user->last_name }}"
                                required autocomplete="last_name" autofocus placeholder="{{ __('home.l_name') }}">
                            </div>
                            <div class="input-inside type-2">
                                <label for="">{{ __('home.phone') }}</label>
                                <span class="form-info"> {{ __('home.warn') }}</span>
                                <input type="text"  id="phone_number" class=" @error('phone_number') is-invalid @enderror"  name="phone_number" value="{{ $user->phone_number }}"
                                required autocomplete="phone_number" autofocus placeholder="{{ __('home.phone') }}">
                            </div>
                            <div class="input-inside type-2">
                                <label for="">{{ __('home.email') }}</label>
                                <input type="text" id="email" class=" @error('email') is-invalid @enderror"  name="email" value="{{ $user->email }}"
                                required autocomplete="email" autofocus placeholder="{{ __('home.email') }}">
                            </div>
                            <div class="input-inside type-2">
                                <label for="">{{ __('home.proimage') }}</label>
                                <div class="uploaded-photo">

                                    <input type="hidden" id="old_profile_image" name="old_profile_image" value="{{ $user->profile_image }}">

                                    <input type="file" id="profile_image" class=" @error('profile_image') is-invalid @enderror"  name="profile_image" value="{{ $user->profile_image }}"
                                     autofocus onchange="document.getElementById('image_profie').src = window.URL.createObjectURL(this.files[0])">
                                    <img id="image_profie" src="/storage/profile/{{ $user->profile_image }}" alt="">
                                    <a href="">{{ __('home.imgupload') }}</a>
                                </div>
                            </div>
                            <div class="submit-btn business-pge">
                                <button class="round-btn" type="submit">{{ __('home.save') }}</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </main>
    @endsection

</body>

</html>
