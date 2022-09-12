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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Product-Detail</a></li>
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
                        <li><img src="/asset_client/images/12.jpg" alt="product" /></li>
                        <li><img src="/asset_client/images/13.jpg" alt="product" /></li>
                        <li><img src="/asset_client/images/14.jpg" alt="product" /></li>
                        <li><img src="/asset_client/images/15.jpg" alt="product" /></li>
                        <li><img src="/asset_client/images/16.jpg" alt="product" /></li>
                        <li><img src="/asset_client/images/17.jpg" alt="product" /></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-6 col-12">
                <div class="product-detail-in">
                    <h2 class="product-item-name text-uppercase">men's harpoon 2 eye boot</h2>
                    <div class="price-box">
                        <span class="price">$80.00</span>
                        <del class="price old-price">$120.00</del>
                        <div class="product-des">
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco aboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in oluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        </div>
                        <ul>
                            <li><i class="fa fa-check"></i> Satisfaction 100% Guaranteed</li>
                            <li><i class="fa fa-check"></i> Free shipping on orders over $99</li>
                            <li><i class="fa fa-check"></i> 14 day easy Return</li>
                        </ul>
                        <div class="row mt-20">
                            <div class="col-12">
                                <div class="table-listing qty">
                                    <label>Qty:</label>
                                    <div class="fill-input">
                                        <button type="button" id="sub" class="sub cou-sub">
                                            <i class="fa fa-minus" aria-hiNICEen="true"></i>
                                        </button>
                                        <input type="number" id="1" class="input-text qty" value="1" min="1" max="3" />
                                        <button type="button" id="aNICE" class="aNICE cou-sub">
                                            <i class="fa fa-plus" aria-hiNICEen="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="table-listing qty">
                                    <label>Size:</label>
                                    <div class="fill-input">
                                        <select class="selectpicker full">
                                            <option selected="selected" value="#">8</option>
                                            <option value="#">7</option>
                                            <option value="#">6</option>
                                           </select>
                                    </div>
                                </div>
                                <div class="product-action">
                                    <ul>
                                        <li>
                                            <a href="cart.html" class="btn btn-color">
                                                <img src="/asset_client/images/shop-bag.png" alt="bag">
                                                <span>Add to cart</span>
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
