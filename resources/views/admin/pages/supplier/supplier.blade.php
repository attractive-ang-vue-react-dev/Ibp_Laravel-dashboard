@extends('admin.components.navigation.nav')
@section('content')
    <main>
        <div class="main-full">
          @include('admin.components.navigation.sidebar')
            <div class="mainContent-wrap">
                <p class="pagi-nation">{{ __('home.acc') }} > {{ __('home.mysupinfos') }}</p>
                <div class="content-heading">
                    <h2>{{ __('home.myc_infos') }}</h2>
                </div>
                <div class="main-content">
                    <form method="POST" action="/supplier/update/{{ $supplier->id }}"  enctype="multipart/form-data">
                        {!! csrf_field() !!}

                        <div class="input-inside type-2">
                            <label for="">{{ __('home.f_name') }}</label>
                            <input type="text" id="first_name" class=" @error('first_name') is-invalid @enderror"  name="first_name" value="{{ $supplier->first_name }}"
                            required autocomplete="first_name" autofocus placeholder="{{ __('home.f_name') }}">
                        </div>
                        <div class="input-inside type-2">
                            <label for="">{{ __('home.l_name') }}</label>
                            <input type="text" id="last_name" class=" @error('last_name') is-invalid @enderror"  name="last_name" value="{{ $supplier->last_name }}"
                            required autocomplete="last_name" autofocus placeholder="{{ __('home.l_name') }}">
                        </div>

                            <input type="hidden" id="email"  name="email" value="{{ $supplier->email }}">

                        <div class="input-inside type-2">
                            <label for="">{{ __('home.phone') }}</label>
                            <input type="text" id="phone_number" class=" @error('phone_number') is-invalid @enderror"  name="phone_number" value="{{ $supplier->phone_number }}"
                            required autocomplete="phone_number" autofocus placeholder="{{ __('home.phone') }}">
                        </div>
                        <div class="input-inside type-2">
                            <label for="">{{ __('home.c_name') }}</label>
                            <input type="text" id="company_name" class=" @error('company_name') is-invalid @enderror"  name="company_name" value="{{ $supplier->company_name }}"
                            required autocomplete="company_name" autofocus placeholder="{{ __('home.c_name') }}">
                        </div>
                        <div class="input-inside type-2">
                            <label for="">{{ __('home.inco_num') }}</label>
                            <input type="text" id="incorporation_number" class=" @error('incorporation_number') is-invalid @enderror"  name="incorporation_number" value="{{ $supplier->incorporation_number }}"
                            required autocomplete="incorporation_number" autofocus placeholder="{{ __('home.inco_num') }}">
                        </div>
                        <div class="input-inside type-2">
                            <label for="">{{ __('home.c_addr') }}</label>
                            <input type="text" id="company_address" class=" @error('company_address') is-invalid @enderror"  name="company_address" value="{{ $supplier->company_address }}"
                            required autocomplete="company_address" autofocus placeholder="{{ __('home.c_addr') }}">
                        </div>
                        <div class="input-inside type-2">
                            <label for="">{{ __('home.tax_num') }}</label>
                            <input type="text" id="tax_number" class=" @error('tax_number') is-invalid @enderror"  name="tax_number" value="{{ $supplier->tax_number }}"
                            required autocomplete="tax_number" autofocus placeholder="{{ __('home.tax_num') }}">
                        </div>

                        <div class="input-inside type-2">
                            <label for="">{{ __('home.c_size') }}</label>
                            <select id="company_size" class="@error('company_size') is-invalid @enderror"  name="company_size" value="{{ $supplier->company_size }}"
                             >
                                <option value="1-10">{{ __('home.xs') }}</option>
                                <option value="10-20">{{ __('home.sm') }}</option>
                                <option value="20-50">{{ __('home.md') }}</option>
                                <option value="50+">{{ __('home.lg') }}</option>
                            </select>
                        </div>
                        <div class="upload-g-wrap-outer">
                            <div class="upload-g-wrap">
                                <div class="input-inside type-2 style2">
                                    <div><label for="">{{ __('home.banner') }}</label></div>

                                    <div class="uploaded-photo banner">

                                        <input type="hidden" id="old_banner_img" value="{{ $supplier->banner_img_url }}">
                                        <input type="file" id="banner_img" class=" @error('banner_img') is-invalid @enderror"  name="banner_img" value="{{ $supplier->banner_img_url ?? '' }}"
                                        required autofocus onchange="document.getElementById('banner_img_tag').src = window.URL.createObjectURL(this.files[0])">
                                        <img id="banner_img_tag" width="100px" src="/storage/supplier/{{ $supplier->banner_img_url ?? '' }}" alt="">
                                        <span>{{ __('home.n_upload') }} {{ __('home.img') }}</a>

                                    </div>
                                </div>
                                <div class="input-inside type-2 style2">
                                    <label for="">{{ __('home.logo') }}</label>
                                    <div class="uploaded-photo logo">
                                        <input type="hidden" id="old_logo_img" value="{{ $supplier->logo_url }}">

                                        <input type="file" id="logo_img" class=" @error('logo_img') is-invalid @enderror"  name="logo_img" value="{{ $supplier->logo_url }}"
                                        required autofocus onchange="document.getElementById('logo_img_tag').src = window.URL.createObjectURL(this.files[0])">
                                        <img id="logo_img_tag" width="100px" src="/storage/supplier/{{ $supplier->logo_url }}" alt="">
                                        <span>{{ __('home.n_upload') }} {{ __('home.img') }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-inside type-2">
                            <label for="">{{ __('home.c_presentation') }}</label>
                            <div class="write-lan">

                                <input type="hidden" id="pr_language" name="language" value="{{ $supplier->language }}">
                                <span  lang="fr">{{ __('home.fr') }}</span>
                                <span lang="en">{{ __('home.en') }}</span>
                                <span  lang="sp">{{ __('home.sp') }}</span>

                            </div>
                            <textarea  id="presentation" class=" @error('presentation') is-invalid @enderror"  name="presentation"
                            required autocomplete="presentation" autofocus placeholder="{{ __('home.c_presentation') }}" cols="30" rows="10">{{  $supplier->presentation   }}</textarea>

                        </div>

                        <div class="input-inside type-2 with-select">
                            <label for="">{{ __('home.category') }}</label>
                            <select  id="company_size" class=" @error('company_size') is-invalid @enderror"
                            name="company_size" value="{{ $supplier->tax_number }}">
                            <option value="">{{ __('home.add_cate') }}</option>
                            <option value="">{{ __('home.add_cate') }}</option>
                            <option value="">{{ __('home.add_cate') }}</option>
                            <option value="">{{ __('home.add_cate') }}</option>
                        </select>
                            <div class="selected-cateogr">
                                <a href="#"><i class="fal fa-times"></i> {{ __('home.fr_ve') }}</a>
                            </div>
                        </div>
                        <div class="input-inside type-2 with-select last">
                            <label for=""> {{ __('home.ad_certificate') }}</label>
                            <select name="" id="">
                            <option value=""> {{ __('home.ad_certificate') }}</option>
                        </select>
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
