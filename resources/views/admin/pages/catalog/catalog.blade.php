@extends('admin.components.navigation.nav')
@section('content')
    <main>
        <div class="main-full">
          @include('admin.components.navigation.sidebar')
            <div class="mainContent-wrap style-2">
                <p class="pagi-nation">My account > my catalog</p>
                <div class="content-heading f-wrap">
                    <div class="heading-lf">
                        <h2>My catalog</h2>
                        <p>2 product(s)</p>
                    </div>
                    <a href="{{ route('new-product') }}" class="round-btn style-2">Add a product</a>
                </div>
                <div class="main-content full-w">
                    <div class="product-shw-g-wrap">
                        @foreach ($products ??'' as $product)
                        <div class="product-sh-item">
                            <div class="sh-img">

                                <img src="/storage/products/{{ explode(',', $product->images)[0] }}" alt="">

                            </div>
                            <div class="right-content">
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
                                @endphp
                                {{-- @if (sizeof(explode(',', $product->categories)) > 0)
                                <a href="#" class="tag blue-bg" tabindex="0">{{ $categories[explode(',', $product->categories)[0]] }}</a>

                                @endif
 --}}

                                <p>{{ $product->title }}</p>
                                <div class="croud-btn">
                                    <a href="/product/edit/{{ $product->id }}">Edit</a>
                                    <a href="/product/delete/{{ $product->id }}">Delete</a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </main>
 @endsection
