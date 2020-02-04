@extends('admin.components.navigation.nav') @section('content')
<main>
    <div class="main-full">
        @include('admin.components.navigation.sidebar')

        <div class="mainContent-wrap">
            <p class="pagi-nation">My account > my catalog > add a product</p>
            <div class="success">{{ $status ?? '' }}</div>

            <div class="content-heading">
                <h2>Add a product</h2>
            </div>
            <div class="main-content full">
                <form method="POST" action="/product/create" enctype="multipart/form-data">
                    {!! csrf_field() !!}

                    <div class="input-inside type-2 half-w">
                        <label for="">Product title</label>
                        <div class="write-lan">
                            <<a href="#" lang="fr" onclick="translate('product_title', this)">French</a>

                            <a href="#" lang="en" onclick="translate('product_title', this)">English</a>

                            <a href="#" lang="es" onclick="translate('product_title', this)">Spanish</a>

                        </div>
                        <input autofocus required type="text" name="product_title" id="product_title" class="@error('product_title') is-valid @enderror" placeholder="{{ __('Product Title') }}">
                    </div>
                    <div class="fm-gd-wrap">
                        <div class="input-inside type-2">
                            <label for="">PRODUCT DESCRIPTION</label>
                            <div class="write-lan">
                                <<a href="#" lang="fr" onclick="translate('product_description', this)">French</a>

                                <a href="#" lang="en" onclick="translate('product_description', this)">English</a>

                                <a href="#" lang="es" onclick="translate('product_description', this)">Spanish</a>

                            </div>
                            <textarea autofocus required name="product_description" id="product_description" cols="30" rows="10" class="@error('product_description') is-valid @enderror" placeholder="{{ __('Product Description') }}"></textarea>
                        </div>
                        <div class="input-inside type-2">
                            <label for="">IGREDIENTS</label>
                            <div class="write-lan">
                                <<a href="#" lang="fr" onclick="translate('product_ingredients', this)">French</a>

                                <a href="#" lang="en" onclick="translate('product_ingredients', this)">English</a>

                                <a href="#" lang="es" onclick="translate('product_ingredients', this)">Spanish</a>

                            </div>
                            <textarea autofocus required name="product_ingredients" id="product_ingredients" cols="30" rows="10" class="@error('product_ingredients') is-valid @enderror" placeholder="{{ __('Product Ingredients') }}"></textarea>
                        </div>
                        <div class="input-inside type-2">
                            <label for="">PRESERVATION</label>
                            <div class="write-lan">
                                <<a href="#" lang="fr" onclick="translate('product_preservation', this)">French</a>

                                <a href="#" lang="en" onclick="translate('product_preservation', this)">English</a>

                                <a href="#" lang="es" onclick="translate('product_preservation', this)">Spanish</a>

                            </div>
                            <textarea autofocus required name="product_preservation" id="product_preservation" cols="30" rows="10" class="@error('product_preservation') is-valid @enderror" placeholder="{{ __('Product Preservation') }}"></textarea>

                        </div>
                        <div class="input-inside type-2">
                            <label for="">PACKAGING</label>
                            <div class="write-lan">
                                <<a href="#" lang="fr" onclick="translate('product_packaging', this)">French</a>

                                <a href="#" lang="en" onclick="translate('product_packaging', this)">English</a>

                                <a href="#" lang="es" onclick="translate('product_packaging', this)">Spanish</a>

                            </div>
                            <textarea autofocus required name="product_packaging" id="product_packaging" cols="30" rows="10" class="@error('product_packaging') is-valid @enderror" placeholder="{{ __('Product Packaging') }}"></textarea>

                        </div>
                        <div class="input-inside type-2 with-select">
                            <label for="">CATEGORIE(S)</label>

                            @php
                            $categories = [
                            "Boissons | Beverages | Bebidas",
                            "Epicerie | Grocery | Productos secos",
                            "Jus & Laitages | Juices & Milk | Jugos y leche",
                            "Fruits & Légumes | Fruits & Vegetables | Frutas y Verduras",
                            "Boulangerie | Bakery | Panadería",
                            "Viande | Meat | Carne",
                            "Frais (dont cremerie) | Fresh | Fresco",
                            "Surgelé | Frozen | Congelado",
                            "Compléments Alimentaires | Food Supplements | Suplementos Alimenticios",
                            "Hygiène & Beauté | Hygiene & Beauty | Higiene y Belleza",
                            "Entretien (Dtergence) | Hygiene (Detergents) | Higiene (Detergentes)"
                            ];

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
                            <input type="hidden" name="product_categories" id="product_categories">

                            <select required onchange="updateCategories(this.value)" required class="@error('product_categories') is-valid @enderror" placeholder="{{ __('Product Categories') }}">
                                <option value="0">Boissons | Beverages | Bebidas</option>
                                <option value="1">Epicerie | Grocery | Productos secos</option>
                                <option value="2">Jus & Laitages | Juices & Milk | Jugos y leche</option>
                                <option value="3">Fruits & Légumes | Fruits & Vegetables | Frutas y Verduras</option>
                                <option selected value="4">Boulangerie | Bakery | Panadería</option>
                                <option value="5">Viande | Meat | Carne</option>
                                <option value="6">Frais (dont cremerie) | Fresh | Fresco</option>
                                <option value="7">Surgelé | Frozen | Congelado</option>
                                <option value="8">Compléments Alimentaires | Food Supplements | Suplementos Alimenticios</option>
                                <option value="9">Hygiène & Beauté | Hygiene & Beauty | Higiene y Belleza</option>
                                <option value="10">Entretien (Dtergence) | Hygiene (Detergents) | Higiene (Detergentes)</option>
                            </select>
                            <div class="selected-cateogr" id="category-box">
                            </div>
                        </div>
                        <div class="input-inside type-2 with-select last">
                            <label for="">Certification(s)</label>
                            <input type="hidden" name="product_certifications" id="product_certifications">

                            <select required onchange="updateCertificates(this.value)" class="@error('product_certifications') is-valid @enderror" placeholder="{{ __('Product Crtifications') }}">
                                <option value="0">Label AB</option>
                                <option value="1">Nature et progrès</option>
                                <option value="2">Label Européen</option>
                                <option value="3">Cosmebio</option>
                                <option value="4">Demeter</option>
                                <option value="5">Ecocert</option>
                                <option value="6">BDIH</option>
                            </select>
                            <div class="selected-cateogr" id="certificate-box">

                            </div>
                        </div>
                        <div class="new-img-upload">
                            <input type="hidden" id="old_product_images" name="old_product_images" value="">
                            <input type="file" id="product_images[]" multiple class=" @error('product_images[]') is-invalid @enderror" name="product_images[]" autofocus onchange="updateImagesview('product_image_box',this.files)">
                            <a href="#" class="up-lnkk">Upload a new picture</a>
                            <div id="product_image_box" class="uploaded-photos"> </div>
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
