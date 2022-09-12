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

<section class="pt-100">
    <div class="container">
        <div class="wishlist-table">
            <div class="responsive-table">
                <table class="table border text-center">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Sub Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-left">
                                <div class="seller-box align-flax w-100">
                                    <div class="seller-img">
                                        <a href="product-detail.html" class="display-b">
                                            <img src="/asset_client/images/product-1.jpg" alt="shoes" class="transition">
                                        </a>
                                    </div>
                                    <div class="seller-contain pl-15">
                                        <a href="product-detail.html" class="product-name text-uppercase">men's harpoon 2 eye boot</a>
                                    </div>
                                </div>
                            </td>
                            <td><span class="price">$70.00</span></td>
                            <td>
                                <select data-id="100" class="quantity_cart" name="quantity_cart">
                                        <option selected="" value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                </select>
                            </td>
                            <td><span class="price">$70.00</span></td>
                            <td>
                                <ul>
                                    <li><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-left">
                                <div class="seller-box align-flax w-100">
                                    <div class="seller-img">
                                        <a href="product-detail.html" class="display-b">
                                            <img src="/asset_client/images/product-2.jpg" alt="shoes" class="transition">
                                        </a>
                                    </div>
                                    <div class="seller-contain pl-15">
                                        <a href="product-detail.html" class="product-name text-uppercase">Dignissim Venenatis</a>
                                    </div>
                                </div>
                            </td>
                            <td><span class="price">$80.00</span></td>
                            <td>
                                <select data-id="100" class="quantity_cart" name="quantity_cart">
                                        <option value="1">1</option>
                                        <option selected="" value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                </select>
                            </td>
                            <td><span class="price">$160.00</span></td>
                            <td>
                                <ul>
                                    <li><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></li>
                                </ul>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="share-wishlist shoping-con">
                        <a href="shop.html" class="btn"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="share-wishlist">
                        <a href="#" class="btn">Update Cart</a>
                    </div>
                </div>
            </div>
            <div class="estimate">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="reviews-head pb-20">Ship</h2>
                        <form class="main-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option selected="" value="">Select Country</option>
                                            <option value="1">India</option>
                                            <option value="2">China</option>
                                            <option value="3">Pakistan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option selected="" value="">Select State/Province</option>
                                            <option value="1">---</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option selected="" value="">Select City</option>
                                            <option value="1">---</option>
                                        </select>
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
                                                <td>Item(s) Subtotal</td>
                                                <td>
                                                <div class="price-box">
                                                        <span class="price">$160.00</span>
                                                </div>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td>Shipping</td>
                                                <td>
                                                <div class="price-box">
                                                        <span class="price">$0.00</span>
                                                </div>
                                                </td>
                                        </tr>
                                            <tr>
                                                <td class="payable"><b>Amount Payable</b></td>
                                                <td>
                                                <div class="price-box">
                                                        <span class="price">$160.00</span>
                                                </div>
                                                </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="share-wishlist">
                                <a href="checkout.html" class="btn btn-color">Payment<i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/custom.js"></script>
@endsection
