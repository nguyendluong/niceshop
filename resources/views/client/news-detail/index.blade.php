@extends('client.layouts.master')
@section('content')
<section class="page-banner">
    <div class="container">
        <div class="page-banner-in">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <h1 class="page-banner-title text-uppercase">NEWS DETAIL</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <ul class="right-side">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">NEWS DETAIL</a></li>
                        <li>{{$new->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog-detail-img">
                    <img src="{{ asset('storage/'.$new->avatar) }}" alt="blog">
                </div>
                <div class="blog-detail-contain">
                    <h2>{{$new->title}}</h2>
                    <span>{{$new->description}}</span>
                    <?php echo 
                        htmlspecialchars_decode($new->content, ENT_NOQUOTES)
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection