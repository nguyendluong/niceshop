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
                            <tr productId="{{$productOrder->productDetail->id}}"
                                sizeId="{{$productOrder->sizeName->id}}">
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
                                    <ul id="js-change-quantity">
                                        <li>
                                            <input style="width: 70px; margin: auto;" type="number" class="form-control"
                                                value="{{$productOrder->quantity}}"
                                                data-productId="{{$productOrder->productDetail->id}}"
                                                data-sizeId="{{$productOrder->sizeName->id}}"
                                                key="{{$productOrder->productDetail->id}}" />
                                        </li>
                                    </ul>
                                </td>
                                <td><span class="price" totalUpdate="true"
                                        productId="{{$productOrder->productDetail->id}}"
                                        sizeId="{{$productOrder->sizeName->id}}">
                                        {{$productOrder->quantity * $productOrder->price}}</span>
                                </td>
                                <td>
                                    <ul id="js-ul-delete">
                                        <li data-productId="{{$productOrder->productDetail->id}}"
                                            data-sizeId="{{$productOrder->sizeName->id}}"><a>
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
                                                        <span class="price" id="js-total-items"
                                                            items="{{count($existOrder)}}">{{count($existOrder)}}</span>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="payable"><b>Amount Payable</b></td>
                                                <td>
                                                    <div class="price-box">
                                                        <span class="price" id="js-total-cart">${{$total}}</span>
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
$(document).ready(function() {
    $('#js-ul-delete li').click(function() {
        const productId = $(this).attr('data-productid');
        const sizeId = $(this).attr('data-sizeid');
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '{{ url("/delete-order") }}',
            data: {
                sizeId: sizeId,
                productId: productId
            },
            success: function(data) {
                $(`[productId="${productId}"][sizeId="${sizeId}"]`).addClass('d-none');
                $('#js-total-cart').html(`$${data.total}`);
                const items = $('#js-total-items').attr('items');
                $('#js-total-items').html(items - 1);
            },
            error: function(e) {
                console.log(e);
            }
        });
    });

    $('#js-change-quantity li input').change(function() {
        const productId = $(this).attr('data-productid');
        const sizeId = $(this).attr('data-sizeid');
        const quantity = $(this).val();
        console.log(quantity, 'quantity')
        console.log(productId, 'productId')
        console.log(sizeId, 'sizeId')


        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '{{ url("/handle-total-of-product") }}',
            data: {
                sizeId: sizeId,
                quantity: quantity,
                productId: productId
            },
            success: function(data) {
                $(`[totalUpdate="true"][productId="${productId}"][sizeId="${sizeId}"]`)
                    .html(`$${data.productTotal}`);
                $('#js-total-cart').html(`$${data.total}`);

            },
            error: function(e) {
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
.d-none {
    display: none !important;
}
</style>
@endsection