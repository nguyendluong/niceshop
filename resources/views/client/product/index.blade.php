@extends('client.layouts.master')
@section('content')
<section class="page-banner">
    <div class="container">
        <div class="page-banner-in">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <h1 class="page-banner-title text-uppercase">PRODUCT</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <ul class="right-side">
                        <li><a href="/">Home</a></li>
                        <li>Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-list">
    <div class="container">
        <div class="row pt-100">
            <div class="col-xl-3 col-lg-4 col-12">
                <div class="sidebar">
                    <div class="sidebar-default mb-30">
                        <div class="category-content filter-by">
                            <h2 class="cat-title text-uppercase">Size</h2>
                            <ul class="category">
                                <li>
                                    <div class="check-box">
                                        <input type="checkbox" class="checkbox" id="s1" name="s">
                                        <label for="s1">S</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box">
                                        <input type="checkbox" class="checkbox" id="m" name="m">
                                        <label for="m">M</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box">
                                        <input type="checkbox" class="checkbox" id="l" name="l">
                                        <label for="l">L</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box">
                                        <input type="checkbox" class="checkbox" id="xl" name="xl">
                                        <label for="xl">XL</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-12">
                <div class="featured">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="/product/{{$product->slug}}">
                                    @if (count($product->avatar) === 0)
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                                        alt="preview image" style="height: 160px; width: 100%;">
                                    @else
                                    <img src="{{ asset('storage/products/'.$product->avatar[0]->path) }}"
                                        style="height:180px; width: 100%;" alt="product" class="transition">
                                    @endif
                                </a>
                                <div class="new-label">
                                    <span class="text-uppercase">New</span>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="/product/{{$product->slug}}"
                                    class="product-name text-uppercase">{{$product->name}}</a>
                                <span class="product-pricce">${{$product->price}}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection