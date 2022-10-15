@extends('client.layouts.master')
@section('content')
<section class="page-banner">
    <div class="container">
        <div class="page-banner-in">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <h1 class="page-banner-title text-uppercase">Cart</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <ul class="right-side">
                        <li><a href="index.html">Home</a></li>
                        <li>Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<form action="/checkout" method="post">
    @csrf

    <section class="pt-100">
        <div class="container">
            <div class="wishlist-table">
                <div class="responsive-table">
                    <table class="table border text-center">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Size</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Sub Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($existOrder) == 0)
                            <tr>
                                <td colspan="6">No data</td>
                            </tr>
                            @else
                            @foreach ($existOrder as $order)

                            @foreach ($order->productOrders as $productOrder)
                            <tr>
                                <td class="text-left">
                                    <div class="seller-box align-flax w-100">
                                        <div class="seller-img">
                                            <a href="/product/{{$productOrder->productDetail->slug}}" class="display-b">
                                                @if (count($productOrder->productDetail->avatar) === 0)
                                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/1665px-No-Image-Placeholder.svg.png"
                                                    alt="preview image" style="height: 180px; width: 100%;">
                                                @else
                                                <img src="{{ asset('storage/products/'.$productOrder->productDetail->avatar[0]->path) }}"
                                                    style="height:75px; width: 100%;" alt="product" class="transition">
                                                @endif
                                            </a>
                                        </div>
                                        <div class="seller-contain pl-15">
                                            <a href="/product/{{$productOrder->productDetail->slug}}"
                                                class="product-name text-uppercase">{{$productOrder->productDetail->name}}</a>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="price">{{$productOrder->sizeName->name}}</span></td>
                                <td><span class="price">${{$productOrder->productDetail->price}}</span></td>
                                <td>
                                    <input style="width: 70px; margin: auto;" type="number" class="form-control"
                                        value="{{$productOrder->quantity}}" />
                                </td>
                                <td><span class="price">${{$productOrder->quantity * $productOrder->price}}</span></td>
                                <td>
                                    <ul>
                                        <li><a onclick="checkOrder()" product_id="{{$productOrder->productDetail->id}}"
                                                size_id="{{$productOrder->sizeName->id}}" id="js-remove-order">
                                                <i class="fa fa-trash-o" aria-hidden="true"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
                <div class="estimate">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="reviews-head pb-20">Payment Info</h2>
                            <form class="main-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="address"
                                                placeholder="Enter your address" required />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="note" class="form-control"
                                                placeholder="Enter your note"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="cart-total-table">
                                <div class="responsive-table">
                                    <table class="table border">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Cart Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Item(s)</td>
                                                <td>
                                                    <div class="price-box">
                                                        <span class="price">${{count($existOrder) + 1}}</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="payable"><b>Amount Payable</b></td>
                                                <td>
                                                    <div class="price-box">
                                                        <span class="price">${{$total}}</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="share-wishlist">
                                    <button type="submit" class="btn btn-color">Submit<i class="fa fa-angle-right"
                                            style="margin: 0 10px"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
@endsection
@section('js')
<script type="text/javascript">
function checkOrder() {
    const product_id = $(this).attr(['product_id']);
    console.log(product_id, 'product_id')
}
$(document).ready(function() {

    $('#js-quantity-order').change(() => {
        const quantity = $('#js-quantity-order').val();
        console.log(quantity, 'quantity');
        // $.ajax({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     },
        //     type: 'POST',
        //     url: '{{ url("/add-to-cart") }}',
        //     data: {
        //         size: size,
        //         quantity: quantity,
        //         productId: productId
        //     },
        //     success: function(data) {
        //         window.location = data.redirect_url;
        //     },
        //     error: function(e) {
        //         console.log(e);
        //     }
        // });
        // TODO handle ajax cart
    })
});
</script>
@endsection