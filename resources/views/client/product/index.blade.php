@extends('client.layouts.master')
@section('content')
<section class="page-banner">
    <div class="container">
        <div class="page-banner-in">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-12">
                    <h1 class="page-banner-title text-uppercase">PRODUCT</h1>
                </div>
                <div class="col-xl-6 col-lg-6 col-12">
                    <ul class="right-side">
                        <li><a href="index.html">Home</a></li>
                        <li>Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-list">
    <div class="container">
        <div class="row pt-100">
            <div class="col-xl-3 col-lg-4 col-12">
                <div class="sidebar">
                    <div class="sidebar-default mb-30">
                        <div class="category-content filter-by">
                            <h2 class="cat-title text-uppercase">Size</h2>
                            <ul class="category">
                                <li>
                                    <div class="check-box">
                                        <input type="checkbox" class="checkbox" id="s1" name="s">
                                        <label for="s1">S</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box">
                                        <input type="checkbox" class="checkbox" id="m" name="m">
                                        <label for="m">M</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box">
                                        <input type="checkbox" class="checkbox" id="l" name="l">
                                        <label for="l">L</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="check-box">
                                        <input type="checkbox" class="checkbox" id="xl" name="xl">
                                        <label for="xl">XL</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-12">
                <div class="shorting mb-30">
                    <div class="row align-flax">
                        <div class="col-xl-6 col-lg-5 col-md-6 mb-r-15">
                            <div class="view">
                                  <div class="list-types grid active">
                                      <a href="shop.html">
                                        <div class="grid-icon list-types-icon">
                                            <i class="fa fa-th-large transition" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                                  <div class="list-types list">
                                      <a href="shop-list.html">
                                        <div class="list-icon list-types-icon">
                                            <i class="fa fa-bars transition" aria-hidden="true"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="short-by"> <span>Product Compare (0)</span>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7 col-md-6 text-right text-left-md">
                            <div class="show-item">
                                <span class="ml-0">Sort By:</span>
                                  <div class="select-item">
                                    <select class="m-w-130">
                                          <option value="" selected="selected">Default sorting</option>
                                          <option value="">Sort by popularity</option>
                                          <option value="">Sort by average rating</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="show-item float-right-md">
                                <span>Show</span>
                                  <div class="select-item">
                                    <select>
                                          <option value="" selected="selected">15</option>
                                          <option value="">12</option>
                                          <option value="">6</option>
                                    </select>
                                  </div>
                            </div>
                        </div>
                    </div>
                   </div>
                <div class="featured">
                    <div class="row">
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-1.jpg" alt="product" class="transition">
                                </a>
                                <div class="new-label">
                                    <span class="text-uppercase">New</span>
                                </div>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">men's harpoon 2 eye boot</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-2.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">AENEAN EU TRISTIQUE</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-3.jpg" alt="product" class="transition">
                                </a>
                                <div class="sale-label">
                                    <span class="text-uppercase">sale</span>
                                </div>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">AENEAN SAGITTIS</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-4.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc" data-category="accessories">
                                <a href="product-detail.html" class="product-name text-uppercase">ALIQUAM LOBORTIS EST</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-5.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">AUCTOR GRAVIDA ENIM</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-6.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">BLIQUAM LOBORTIS</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-7.jpg" alt="product" class="transition">
                                </a>
                                <div class="new-label">
                                    <span class="text-uppercase">New</span>
                                </div>
                                <div class="sale-label">
                                    <span class="text-uppercase">sale</span>
                                </div>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">BUSCIPIT AT MAGNA</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-8.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">CONDIMENTUM POSUERE</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-9.jpg" alt="product" class="transition">
                                </a>
                                <div class="new-label">
                                    <span class="text-uppercase">New</span>
                                </div>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">DIGNISSIM VENENATIS</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-10.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">ELEIFEND ARCU</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-1.jpg" alt="product" class="transition">
                                </a>
                                <div class="new-label">
                                    <span class="text-uppercase">New</span>
                                </div>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">men's harpoon 2 eye boot</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-2.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">AENEAN EU TRISTIQUE</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-3.jpg" alt="product" class="transition">
                                </a>
                                <div class="sale-label">
                                    <span class="text-uppercase">sale</span>
                                </div>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">AENEAN SAGITTIS</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-4.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc" data-category="accessories">
                                <a href="product-detail.html" class="product-name text-uppercase">ALIQUAM LOBORTIS EST</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-5.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">AUCTOR GRAVIDA ENIM</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-6.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">BLIQUAM LOBORTIS</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-7.jpg" alt="product" class="transition">
                                </a>
                                <div class="new-label">
                                    <span class="text-uppercase">New</span>
                                </div>
                                <div class="sale-label">
                                    <span class="text-uppercase">sale</span>
                                </div>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">BUSCIPIT AT MAGNA</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-8.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">CONDIMENTUM POSUERE</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-9.jpg" alt="product" class="transition">
                                </a>
                                <div class="new-label">
                                    <span class="text-uppercase">New</span>
                                </div>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">DIGNISSIM VENENATIS</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-10.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">ELEIFEND ARCU</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-1.jpg" alt="product" class="transition">
                                </a>
                                <div class="new-label">
                                    <span class="text-uppercase">New</span>
                                </div>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">men's harpoon 2 eye boot</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-2.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">AENEAN EU TRISTIQUE</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-3.jpg" alt="product" class="transition">
                                </a>
                                <div class="sale-label">
                                    <span class="text-uppercase">sale</span>
                                </div>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc">
                                <a href="product-detail.html" class="product-name text-uppercase">AENEAN SAGITTIS</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                        <div class="featured-product mb-25">
                            <div class="product-img transition mb-15">
                                <a href="product-detail.html">
                                    <img src="/asset_client/images/product-4.jpg" alt="product" class="transition">
                                </a>
                                <div class="product-details-btn text-uppercase text-center transition">
                                    <a href="product-quick-view.html" class="quick-popup">Quick View</a>
                                </div>
                            </div>
                            <div class="product-desc" data-category="accessories">
                                <a href="product-detail.html" class="product-name text-uppercase">ALIQUAM LOBORTIS EST</a>
                                <span class="product-pricce">$478.00</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shorting pagination-1 mt-20">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="pagination-bar">
                                  <ul>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                  </ul>
                                </div>
                              </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="show-item right-side float-none-md">
                                <span class="float-none-md d-block">Showing 1 to 15 of 15 (1 Pages)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
