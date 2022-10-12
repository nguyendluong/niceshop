@extends('client.layouts.master')
@section('content')
<section class="page-banner">
    <div class="container">
        <div class="page-banner-in">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <h1 class="page-banner-title text-uppercase">NEWS</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <ul class="right-side">
                        <li><a href="index.html">Home</a></li>
                        <li>News</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 order-r-1">
                <div class="blog-right">
                    @foreach ($news as $new) 
                    <div class="row align-flax mb-30">
                        <div class="col-xl-5 col-lg-5 col-md-5">
                            <div class="latest-blog-img">
                                <a href="blog-detail.html" class="display-b">
                                    <!-- <img src="/asset_client/images/blog-4.jpg" alt="blog"> -->
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7 col-md-7">
                            <div class="lat-blog-desc">
                                <a href="blog-detail.html" class="lat-blog-title text-uppercase">{{$new->title}}</a>
                                <!-- <p class="lat-blog-date text-uppercase"><span>john doe</span> - APRIL 18, 2015 AT 5.00 PM</p> -->
                                <p class="lat-blog-detail">{{ $new->content }}</p>
                                <a href="blog-detail.html" class="btn-2">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
