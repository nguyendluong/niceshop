@extends('client.layouts.master')
@section('content')
<section class="page-banner">
    <div class="container">
        <div class="page-banner-in">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <h1 class="page-banner-title text-uppercase">Checkout</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <ul class="right-side">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="cart.html">Cart</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="checkout pt-100">
    <div class="container">
        <form>
            <div class="row">
                <div class="col-lg-8 col-12">
                    <div class="billing-details">
                        <h2 class="checkout-title mb-30">Billing Details</h2>
                        <div class="checkout-form">
                            <div class="row">
                                <div class="col-12">
                                      <div class="form-group">
                                        <label class="form-label">Full Name*</label>
                                        <input type="text" class="form-control" required>
                                      </div>
                                </div>

                                <div class="col-12">

                                </div>
                                <div class="col-12">
                                      <div class="form-group">
                                        <label class="form-label">Email Address</label>
                                        <input type="text" class="form-control">
                                      </div>
                                </div>
                                <div class="col-12">
                                      <div class="form-group">
                                        <label class="form-label">Phone No</label>
                                        <input type="text" class="form-control">
                                      </div>
                                </div>
                                <div class="col-12">

                                </div>
                                <div class="col-12">
                                      <div class="form-group">
                                        <label class="form-label">Address*</label>
                                        <input type="text" class="form-control" placeholder="Street address" required>
                                      </div>
                                </div>
                                <div class="col-12">

                                </div>
                                <div class="col-lg-6 col-md-6 col-12">

                                </div>
                                <div class="col-lg-6 col-md-6 col-12">

                                </div>
                                <div class="col-12">

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="your-order">
                        <h2 class="checkout-title mb-30">Your order</h2>
                        <div class="seller">
                            <div class="seller-box align-flax w-100">
                                <div class="seller-img">
                                    <a href="product-detail.html" class="display-b">
                                        <img src="/asset_client/images/product-1.jpg" alt="shoes" class="transition">
                                    </a>
                                </div>
                                <div class="seller-contain pl-15">
                                    <a href="product-detail.html" class="product-name text-uppercase">men's harpoon 2 eye boot</a>
                                    <span class="product-pricce">$478.00</span>
                                    <div class="checkout-qty">
                                        <label>Qty: </label>
                                        <span class="info-deta">1</span>
                                    </div>
                                </div>
                            </div>
                            <div class="seller-box align-flax w-100">
                                <div class="seller-img">
                                    <a href="product-detail.html" class="display-b">
                                        <img src="/asset_client/images/product-7.jpg" alt="shoes" class="transition">
                                    </a>
                                </div>
                                <div class="seller-contain pl-15">
                                    <a href="product-detail.html" class="product-name text-uppercase">BUSCIPIT AT MAGNA</a>
                                    <span class="product-pricce">$478.00</span>
                                    <div class="checkout-qty">
                                        <label>Qty: </label>
                                        <span class="info-deta">2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="seller-box align-flax w-100">
                                <div class="seller-img">
                                    <a href="product-detail.html" class="display-b">
                                        <img src="/asset_client/images/product-3.jpg" alt="shoes" class="transition">
                                    </a>
                                </div>
                                <div class="seller-contain pl-15">
                                    <a href="product-detail.html" class="product-name text-uppercase">AENEAN SAGITTIS</a>
                                    <span class="product-pricce">$478.00</span>
                                    <div class="checkout-qty">
                                        <label>Qty: </label>
                                        <span class="info-deta">1</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="subtotal-main">
                            <div class="subtotal-head">
                                <div class="row">
                                    <div class="col-6">
                                        <label>sub total</label>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span>$520.66</span>
                                    </div>
                                </div>
                            </div>
                            <div class="shiping">
                                <span>Shiping</span>
                            </div>
                            <div class="shiping-type">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="radio-btn">
                                              <input type="radio" id="standard" name="gender" value="standard">
                                              <label class="custom-radio" for="standard">Standard:</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span>$56.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="shiping-type">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="radio-btn">
                                            <input type="radio" id="express" name="gender" value="express">
                                              <label class="custom-radio" for="express">Express:</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span>$86.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="total-all">
                                <div class="total-border">
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Total</label>
                                        </div>
                                        <div class="col-6 text-right">
                                            <span>$520.66</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-color">Order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
@endsection

