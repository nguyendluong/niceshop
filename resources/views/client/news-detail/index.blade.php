@extends('client.layouts.master')
@section('content')
<section class="page-banner">
    <div class="container">
        <div class="page-banner-in">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <h1 class="page-banner-title text-uppercase">NEWS-DETAIL</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <ul class="right-side">
                        <li><a href="index.html">Home</a></li>
                        <li>News-Detail</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-4 order-r-2">
                <div class="blog-sidebar">
                    <div class="blog-categories">
                        <h2 class="blog-sidebar-title text-uppercase">Categories</h2>
                        <ul class="Categories-blog">
                            <li><a href="#">Creative</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Image</a></li>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Travel</a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="col-xl-9 col-lg-8 order-r-1">
                <div class="blog-right">
                    <div class="row align-flax mb-30">
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            <div class="latest-blog-img">
                                <a href="blog-detail.html" class="display-b">
                                    <img src="/asset_client/images/blog-4.jpg" alt="blog">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            <div class="lat-blog-desc">
                                <a href="blog-detail.html" class="lat-blog-title text-uppercase">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                <p class="lat-blog-date text-uppercase"><span>john doe</span> - APRIL 18, 2015 AT 5.00 PM</p>
                                <p class="lat-blog-detail">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even</p>
                                <a href="blog-detail.html" class="btn-2">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row align-flax mb-30">
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            <div class="latest-blog-img">
                                <a href="blog-detail.html" class="display-b">
                                    <img src="/asset_client/images/blog-5.jpg" alt="blog">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            <div class="lat-blog-desc">
                                <a href="blog-detail.html" class="lat-blog-title text-uppercase">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                <p class="lat-blog-date text-uppercase"><span>john doe</span> - APRIL 18, 2015 AT 5.00 PM</p>
                                <p class="lat-blog-detail">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even</p>
                                <a href="blog-detail.html" class="btn-2">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="row align-flax">
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            <div class="latest-blog-img">
                                <a href="blog-detail.html" class="display-b">
                                    <img src="/asset_client/images/blog-6.jpg" alt="blog">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            <div class="lat-blog-desc">
                                <a href="blog-detail.html" class="lat-blog-title text-uppercase">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</a>
                                <p class="lat-blog-date text-uppercase"><span>john doe</span> - APRIL 18, 2015 AT 5.00 PM</p>
                                <p class="lat-blog-detail">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even</p>
                                <a href="blog-detail.html" class="btn-2">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

