@extends('admin.components.navigation.nav')
@section('content')
    <main>
        <div class="main-full">
          @include('admin.components.navigation.sidebar')

            <div class="mainContent-wrap">
                <p class="pagi-nation">My account > my catalog > add a product</p>
                {{-- <div class="success">{{ $status ?? '' }}</div> --}}

                <div class="content-heading">
                    <h2>Add a product</h2>
                </div>
                <div class="main-content full">
                    <form method="POST" action="/product/update/{{ $product->id}}" enctype="multipart/form-data">
                        {!! csrf_field() !!}

                       <div class="input-inside type-2 half-w">
                        <label for="">Product title</label>
                        <div class="write-lan">
                            <a href="#" lang="fr" onclick="translate('product_title', this)">French</a>
                            <a href="#" lang="en" onclick="translate('product_title', this)">English</a>
                            <a href="#" lang="es" onclick="translate('product_title', this)">Spanish</a>
                        </div>
                        <input value="{{ $product->title}}" autofocus required type="text" name="product_title" id="product_title" class="@error('product_title') is-valid @enderror" placeholder="{{ __('Product Title') }}">
                    </div>
                       <div class="fm-gd-wrap">
                            <div class="input-inside type-2">
                                <label for="">PRODUCT DESCRIPTION</label>
                                <div class="write-lan">
                                    <a href="#" lang="fr" onclick="translate('product_description', this)">French</a>
                                    <a href="#" lang="en" onclick="translate('product_description', this)">English</a>
                                    <a href="#" lang="es" onclick="translate('producproduct_descriptiont_title', this)">Spanish</a>
                                </div>
                                <textarea autofocus required name="product_description" id="product_description" cols="30" rows="10" class="@error('product_description') is-valid @enderror" placeholder="{{ __('Product Description') }}">{{ $product->description}}</textarea>
                            </div>
                            <div class="input-inside type-2">
                                <label for="">IGREDIENTS</label>
                                <div class="write-lan">
                                    <a href="#" lang="fr" onclick="translate('product_ingredients', this)">French</a>
                                    <a href="#" lang="en" onclick="translate('product_ingredients', this)">English</a>
                                    <a href="#" lang="es" onclick="translate('product_ingredients', this)">Spanish</a>
                                </div>
                                <textarea autofocus required  name="product_ingredients" id="product_ingredients" cols="30" rows="10" class="@error('product_ingredients') is-valid @enderror" placeholder="{{ __('Product Ingredients') }}">{{ $product->ingredients}}</textarea>
                            </div>
                            <div class="input-inside type-2">
                                <label for="">PRESERVATION</label>
                                <div class="write-lan">
                                    <a href="#" lang="fr" onclick="translate('product_preservation', this)">French</a>
                                    <a href="#" lang="en" onclick="translate('product_preservation', this)">English</a>
                                    <a href="#" lang="es" onclick="translate('product_preservation', this)">Spanish</a>
                                </div>
                                <textarea autofocus required name="product_preservation" id="product_preservation" cols="30" rows="10" class="@error('product_preservation') is-valid @enderror" placeholder="{{ __('Product Preservation') }}">{{ $product->preservation }}</textarea>

                            </div>
                            <div class="input-inside type-2">
                                <label for="">PACKAGING</label>
                                <div class="write-lan">
                                    <a href="#" lang="fr" onclick="translate('product_packaging', this)">French</a>
                                    <a href="#" lang="en" onclick="translate('product_packaging', this)">English</a>
                                    <a href="#" lang="es" onclick="translate('product_packaging', this)">Spanish</a>
                                </div>
                                <textarea  autofocus required name="product_packaging" id="product_packaging" cols="30" rows="10" class="@error('product_packaging') is-valid @enderror" placeholder="{{ __('Product Packaging') }}">{{ $product->packaging}}</textarea>

                            </div>

                            <div class="input-inside type-2 with-select">
                                @php
                                $categories = [
                                    "Beverages",
                                    "Grocery",
                                    "Juices & Milk",
                                    "Fruits & Vegetables",
                                    "Bakery",
                                    "Meat",
                                    "Fresh",
                                    "Frozen",
                                    "Food Supplements",
                                    "Hygiene & Beauty",
                                    "Hygiene (Detergents)"];


                                $certificates = [
                                    "Label AB",
                                    "Nature et progrès",
                                    "Label Européen",
                                    "Cosmebio",
                                    "Demeter",
                                    "Ecocert",
                                    "BDIH"
                                ];

                                @endphp
                                <label for="">CATEGORIE(S)</label>
                            <input type="hidden" name="product_categories" id="product_categories" value="{{ $product->categories }}">
                                    <select onchange="updateCategories(this.value)" required class="@error('product_categories') is-valid @enderror" placeholder="{{ __('Product Categories') }}">
                                        @php
                                            $inc = 0;
                                        @endphp
                                        @foreach ($categories as $category)
                                            <option value="{{ $inc++ }}"> {{ $category }} </option>
                                        @endforeach
                                        @php
                                            $inc = 0;
                                        @endphp
                                    </select>
                                <div class="selected-cateogr" id="category-box">

                                    @foreach (explode(',', $product->categories) as $key => $value)
                                     @if (empty($value))

                                     @else
                                        <a  onclick="removeValue('product_categories',{{ $value }},this) " class="fal fa-times">  {{ $categories[$value] }} </a>
                                     @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="input-inside type-2 with-select last">
                                <label for="">Certification(s)</label>
                            <input type="hidden" name="product_certifications" id="product_certifications" value="{{ $product->certifications }}">

                                <select required onchange="updateCertificates(this.value)" class="@error('product_certifications') is-valid @enderror" placeholder="{{ __('Product Crtifications') }}">

                                    @php
                                        $inc = 0;
                                    @endphp
                                    @foreach ($certificates as $caertificate)
                                        <option value="{{ $inc++ }}"> {{ $caertificate }} </option>
                                    @endforeach
                                </select>
                                <div class="selected-cateogr" id="certificate-box">

                                    @foreach (explode(',', $product->certifications) as $key => $value)
                                     @if (empty($value))

                                     @else
                                        <a  onclick="removeValue('product_certifications',{{ $value }},this) " class="fal fa-times">  {{ $certificates[$value] }} </a>
                                     @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="new-img-upload">
                                <input  type="file" id="product_images[]"  multiple class=" @error('product_images[]') is-invalid @enderror"  name="product_images[]"
                                 autofocus onchange="updateImagesview('product_image_box',this.files)" value="{{ $product->images}}">
                                <a href="#" class="up-lnkk">Upload a new picture</a>
                                <script type="text/javascript">
                                window.onload =  function() {
                                    var files = "{{ $product->images }}".split(',');
                                    updateImagesviewEdit('product_image_box',files);
                                }
                                </script>
                                <div id="product_image_box" class="uploaded-photos">  </div>
                            </div>
                        </div>
                        <div class="submit-btn business-pge">
                            <button class="round-btn" type="submit">SAVE</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
