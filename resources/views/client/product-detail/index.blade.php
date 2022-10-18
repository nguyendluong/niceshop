@extends('client.layouts.master')
@section('content')
<section class="page-banner">
    <div class="container">
        <div class="page-banner-in">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <h1 class="page-banner-title text-uppercase">PRODUCT-DETAIL</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <ul class="right-side">
                        <li><a href="/">Home</a></li>
                        <li><a href="#">{{$product->name}}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-detail-main pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-12">
                <div class="align-center mb-md-30">
                    <ul id="glasscase" class="gc-start">
                        @foreach ($product->galleries as $image)
                        <li><img src="{{ asset('storage/products/'.$image->path) }}" alt="product" /></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-12">
                <div class="product-detail-in">
                    <h2 class="product-item-name text-uppercase">{{$product->name}}</h2>
                    <div class="price-box">
                        <span class="price">${{$product->price}}</span>
                        <!-- <del class="price old-price">$120.00</del> -->
                        <div class="product-des">
                            <p>{{$product->description}}</p>
                        </div>
                        <!-- <ul>
                            <li><i class="fa fa-check"></i> Satisfaction 100% Guaranteed</li>
                            <li><i class="fa fa-check"></i> Free shipping on orders over $99</li>
                            <li><i class="fa fa-check"></i> 14 day easy Return</li>
                        </ul> -->
                        <div class="row mt-20">
                            <div class="col-12">
                                <div class="table-listing qty">
                                    <label>Qty:</label>
                                    <div class="fill-input">
                                        <input type="number" id="js-data-quantity" class="input-text qty" value="1" />
                                    </div>
                                </div>
                                <div class="table-listing qty">
                                    <label>Size:</label>
                                    <div class="fill-input">
                                        <select class="selectpicker full" id="js-data-size">
                                            @foreach ($product->sizes as $size)
                                            <option value="{{$size->size_name->id}}">{{$size->size_name->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a href="#" id="js-add-card" class="btn btn-color">
                                                <input type="hidden" id="js-data-productId" value="{{$product->id}}" />
                                                <img src="/asset_client/images/shop-bag.png" alt="bag">
                                                <span id="js-text-card">Add to cart</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script type="text/javascript">
$(document).ready(function() {
    //If your <ul> has the id "glasscase"
    $('#glasscase').glassCase({
        'thumbsPosition': 'bottom',
        'widthDisplayPerc': 100,
        isDownloadEnabled: false,
    });

    $('#js-add-card').click(() => {
        const productId = $('#js-data-productId').val();
        const quantity = $('#js-data-quantity').val();
        const size = $('#js-data-size').find(":selected").val();
        console.log(size, 'size');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '{{ url("/add-to-cart") }}',
            data: {
                size: size,
                quantity: quantity,
                productId: productId
            },
            success: function(data) {
                window.location = data.redirect_url;
            },
            error: function(e) {
                $("#js-text-card").html('Please login !!!')
                console.log(e);
            }
        });
        // TODO handle ajax cart
    })
});
</script>
@endsection
@section('css')
<style>
.price-box .product-action .btn-color {
    width: 200px;
}
</style>
@endsection