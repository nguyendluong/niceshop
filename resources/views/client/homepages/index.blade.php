@extends('client.layouts.master')
@section('content')
<section class="home-banner">
    <div class="container">
        <div class="home-slider owl-carousel">
            @if (count($sliders) === 0)
            <div class="banner-bg align-flax">
                <div class="w-100">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 align-flax">
                            <div class="banner-img"><img src="/asset_client/images/banner.jpg" alt="banner"></div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 align-flax">
                            <div class="banner-heading w-100">
                                <label class="banner-top">Get UP To <span>40%</span> Off</label>
                                <h2 class="banner-title">men <span>shoes</span></h2>
                                <p class="banner-sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec
                                    odio. Quisque volutpat mattis eros.</p>
                                <a href="/" class="btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            @foreach ($sliders as $slider)
            <div class="banner-bg align-flax">
                <div class="w-100">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 align-flax">
                            <div class="banner-img"><img src="{{ asset('storage/'.$slider->path) }}"
                                    alt="{{ $slider->name }}"></div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 align-flax">
                            <div class="banner-heading w-100">
                                <label style="line-height: 1" class="banner-top">{{ $slider->name }}</label>
                                <p class="banner-sub">{{ $slider->description }}</p>
                                <a href="{{ $slider->link }}" class="btn">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>

<section class="featured pt-100">
    <div class="container">
        <div class="row mb-25">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="hading">
                    <h2 class="hading-title">FEATURED <span>PRODUCTS</span></h2>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <ul id="tabs" class="product-isotop filters-product text-right text-uppercase nav nav-tabs"
                    role="tablist">
                    <li role="presentation" class="transition" data-filter="*">
                        <a href="#all" class="active" role="tab" data-toggle="tab">all</a>
                    </li>
                    @foreach ($categories as $category)
                    <li role="presentation" class="transition" data-filter=".{{$category->slug}}">
                        <a href="#{{$category->slug}}" role="tab" data-toggle="tab">{{$category->name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="row tab-pane fade active show" id="all">
                @foreach ($all_product as $product)
                <div class="featured-product mb-25">
                    <div class="product-img transition mb-15">
                        <a href="/product/{{$product->slug}}">
                            @if (count($product->avatar) === 0)
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                                alt="preview image" style="height: 180px; width: 100%;">
                            @else
                            <img src="{{ asset('storage/products/'.$product->avatar[0]->path) }}"
                                style="height:180px; width: 100%;" alt="product" class="transition">
                            @endif
                        </a>
                        <div class="new-label">
                            <span class="text-uppercase">New</span>
                        </div>
                        <!-- <div class="sale-label">
                            <span class="text-uppercase">sale</span>
                        </div> -->
                        <div class="product-details-btn text-uppercase text-center transition">
                            <a href="/product/{{$product->slug}}" class="quick-popup">Quick View</a>
                        </div>
                    </div>
                    <div class="product-desc">
                        <a href="/product/{{$product->slug}}" class="product-name text-uppercase">{{$product->name}}</a>
                        <span class="product-pricce">${{$product->price}}</span>
                    </div>
                </div>
                @endforeach
            </div>
            @foreach ($categories as $category)
            <div role="tabpanel" class="row tab-pane fade" id="{{$category->slug}}">
                @foreach ($category->products as $product)
                <div class="featured-product mb-25">
                    <div class="product-img transition mb-15">
                        <a href="/product/{{$product->slug}}">
                            @if (count($product->avatar) === 0)
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                                alt="preview image" style="height: 180px; width: 100%;">
                            @else
                            <img src="{{ asset('storage/products/'.$product->avatar[0]->path) }}"
                                style="height:180px; width: 100%;" alt="product" class="transition">
                            @endif
                        </a>
                        <!-- <div class="new-label">
                            <span class="text-uppercase">New</span>
                        </div> -->
                        <!-- <div class="sale-label">
                                <span class="text-uppercase">sale</span>
                            </div> -->
                        <div class="product-details-btn text-uppercase text-center transition">
                            <a href="/product/{{$product->slug}}" class="quick-popup">Quick View</a>
                        </div>
                    </div>
                    <div class="product-desc">
                        <a href="/product/{{$product->slug}}" class="product-name text-uppercase">{{$product->name}}</a>
                        <span class="product-pricce">${{$product->price}}</span>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="offer-banner pt-70">
    <div class="container">
        <div class="offer-bg bg text-center ptb-120">
            <label class="banner-top text-uppercase">PROMOTION SALE <span>OFF 50%</span></label>
            <h1 class="banner-title text-uppercase"><span>the</span> summer</h1>
            <p class="banner-sub">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. </p>
            <a href="product-detail.html" class="btn">Shop now</a>
        </div>
    </div>
</section>

<!-- <section class="best-seller pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="hading pb-20">
                            <h2 class="hading-title">best <span>seller</span></h2>
                        </div>
                        <div class="seller">
                            <div class="seller-box align-flax w-100 pb-20">
                                <div class="seller-img">
                                    <a href="product-detail.html" class="display-b">
                                        <img src="/asset_client/images/product-1.jpg" alt="shoes" class="transition">
                                    </a>
                                </div>
                                <div class="seller-contain pl-15">
                                    <a href="product-detail.html" class="product-name text-uppercase">men's harpoon 2
                                        eye boot</a>
                                    <span class="product-pricce">$478.00</span>
                                </div>
                            </div>
                            <div class="seller-box align-flax w-100 pb-20">
                                <div class="seller-img">
                                    <a href="product-detail.html" class="display-b">
                                        <img src="/asset_client/images/product-7.jpg" alt="shoes" class="transition">
                                    </a>
                                </div>
                                <div class="seller-contain pl-15">
                                    <a href="product-detail.html" class="product-name text-uppercase">BUSCIPIT AT
                                        MAGNA</a>
                                    <span class="product-pricce">$478.00</span>
                                </div>
                            </div>
                            <div class="seller-box align-flax w-100 pb-20">
                                <div class="seller-img">
                                    <a href="product-detail.html" class="display-b">
                                        <img src="/asset_client/images/product-3.jpg" alt="shoes" class="transition">
                                    </a>
                                </div>
                                <div class="seller-contain pl-15">
                                    <a href="product-detail.html" class="product-name text-uppercase">AENEAN
                                        SAGITTIS</a>
                                    <span class="product-pricce">$478.00</span>
                                </div>
                            </div>
                            <div class="seller-box align-flax w-100 pb-20">
                                <div class="seller-img">
                                    <a href="product-detail.html" class="display-b">
                                        <img src="/asset_client/images/product-1.jpg" alt="shoes" class="transition">
                                    </a>
                                </div>
                                <div class="seller-contain pl-15">
                                    <a href="product-detail.html" class="product-name text-uppercase">men's harpoon 2
                                        eye boot</a>
                                    <span class="product-pricce">$478.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="hading pb-20">
                            <h2 class="hading-title">top <span>seller</span></h2>
                        </div>
                        <div class="seller">
                            <div class="seller-box align-flax w-100 pb-20">
                                <div class="seller-img">
                                    <a href="product-detail.html" class="display-b">
                                        <img src="/asset_client/images/product-4.jpg" alt="shoes" class="transition">
                                    </a>
                                </div>
                                <div class="seller-contain pl-15">
                                    <a href="product-detail.html" class="product-name text-uppercase">ALIQUAM LOBORTIS
                                        EST</a>
                                    <span class="product-pricce">$478.00</span>
                                </div>
                            </div>
                            <div class="seller-box align-flax w-100 pb-20">
                                <div class="seller-img">
                                    <a href="product-detail.html" class="display-b">
                                        <img src="/asset_client/images/product-10.jpg" alt="shoes" class="transition">
                                    </a>
                                </div>
                                <div class="seller-contain pl-15">
                                    <a href="product-detail.html" class="product-name text-uppercase">ELEIFEND ARCU</a>
                                    <span class="product-pricce">$478.00</span>
                                </div>
                            </div>
                            <div class="seller-box align-flax w-100 pb-20">
                                <div class="seller-img">
                                    <a href="product-detail.html" class="display-b">
                                        <img src="/asset_client/images/product-2.jpg" alt="shoes" class="transition">
                                    </a>
                                </div>
                                <div class="seller-contain pl-15">
                                    <a href="product-detail.html" class="product-name text-uppercase">AENEAN EU
                                        TRISTIQUE</a>
                                    <span class="product-pricce">$478.00</span>
                                </div>
                            </div>
                            <div class="seller-box align-flax w-100 pb-20">
                                <div class="seller-img">
                                    <a href="product-detail.html" class="display-b">
                                        <img src="/asset_client/images/product-6.jpg" alt="shoes" class="transition">
                                    </a>
                                </div>
                                <div class="seller-contain pl-15">
                                    <a href="product-detail.html" class="product-name text-uppercase">BLIQUAM
                                        LOBORTIS</a>
                                    <span class="product-pricce">$478.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section> -->

<section class="team pt-100">
    <div class="container">
        <div class="team-inner owl-carousel">
            <div class="team-slide text-center">
                <div class="team-img position-r">
                    <img src="/asset_client/images/team-1.jpg" alt="team">
                    <span class="quote-c"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                </div>
                <div class="team-desc">
                    <p class="member-detail">make a type specimen book. It has survived not only five centuries, but
                        also the leap into electronic typesetting, remaining essentially unchanged. It was make a type
                        specimen book. It has survived not only five centuries.</p>
                    <h3 class="member-name text-uppercase">john Doe</h3>
                </div>
            </div>
            <div class="team-slide text-center">
                <div class="team-img position-r">
                    <img src="/asset_client/images/team-1.jpg" alt="team">
                    <span class="quote-c"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                </div>
                <div class="team-desc">
                    <p class="member-detail">make a type specimen book. It has survived not only five centuries, but
                        also the leap into electronic typesetting, remaining essentially unchanged. It was make a type
                        specimen book. It has survived not only five centuries.</p>
                    <h3 class="member-name text-uppercase">john Doe</h3>
                </div>
            </div>
            <div class="team-slide text-center">
                <div class="team-img position-r">
                    <img src="/asset_client/images/team-1.jpg" alt="team">
                    <span class="quote-c"><i class="fa fa-quote-left" aria-hidden="true"></i></span>
                </div>
                <div class="team-desc">
                    <p class="member-detail">make a type specimen book. It has survived not only five centuries, but
                        also the leap into electronic typesetting, remaining essentially unchanged. It was make a type
                        specimen book. It has survived not only five centuries.</p>
                    <h3 class="member-name text-uppercase">john Doe</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="latest-blog pt-100">
    <div class="container">
        <div class="latest-blog-inner">
            <div class="hading pb-20">
                <h2 class="hading-title">latest<span>blog</span></h2>
            </div>
            <div class="latest-blog-salid owl-carousel">
                @foreach ($news as $new)

                <div class="row align-flax pr-30">
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="latest-blog-img">
                            <a href="/new/{{$new->slug}}" class="display-b">
                                <img src="/asset_client/images/blog-1.jpg" alt="blog">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="lat-blog-desc">
                            <a href="/new/{{$new->slug}}" class="lat-blog-title text-uppercase">{{$new->title}}</a>
                            <p class="lat-blog-date text-uppercase"><span>john doe</span> - APRIL 18, 2015 AT 5.00 PM
                            </p>
                            <p class="lat-blog-detail">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even</p>
                            <a href="/new/{{$new->slug}}" class="btn-2">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="row align-flax pr-30">
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="latest-blog-img">
                            <a href="blog-detail.html" class="display-b">
                                <img src="/asset_client/images/blog-2.jpg" alt="blog">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7">
                        <div class="lat-blog-desc">
                            <a href="blog-detail.html" class="lat-blog-title text-uppercase">Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry.</a>
                            <p class="lat-blog-date text-uppercase"><span>john doe</span> - APRIL 18, 2015 AT 5.00 PM
                            </p>
                            <p class="lat-blog-detail">There are many variations of passages of Lorem Ipsum available,
                                but the majority have suffered alteration in some form, by injected humour, or
                                randomised words which don't look even</p>
                            <a href="blog-detail.html" class="btn-2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="top-scrolling">
    <a href="#main" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>
@endsection