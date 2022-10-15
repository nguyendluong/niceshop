<? use Illuminate\Support\Facades\Auth; ?>
<header class="header transition">
    <div class="container position-r">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-6 align-flax">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">
                        <img alt="log" src="/asset_client/images/logo.png" class="transition">
                    </a>
                </div>
            </div>
            <div class="col-lg-10 col-md-8 col-6 position-i">
                <div class="menu-left transition">
                    <div class="menu">
                        <ul>
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <!-- <li class="dropdown">
                                <span class="opener plus"></span>
                                <a href="shop.html">Pages</a>
                                <div class="megamenu">
                                    <div class="megamenu-inner">
                                        <ul>
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="shop-list.html">Shop List</a></li>
                                            <li><a href="product-detail.html">Product Detail</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li> -->
                            <li class="dropdown">
                                <span class="opener plus"></span>
                                <a href="/">Product</a>
                                <div class="megamenu full">
                                    <div class="megamenu-inner">
                                        <div class="row">
                                            @foreach($categories as $category)
                                            <div class="col-xl-3 col-lg-3 col-md-12">
                                                <a href="/products/{{$category->slug}}"
                                                    class="megamenu-title">{{$category->name}}</a>
                                                <ul>
                                                    @foreach($category->subcategory as $subcategory)
                                                    <li><a
                                                            href="/product/{{$subcategory->slug}}">{{ $subcategory->name }}</a>
                                                    </li>
                                                    @endforeach

                                                </ul>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <span class="opener plus"></span>
                                <a href="/news">News</a>
                                <div class="megamenu">
                                    <div class="megamenu-inner">
                                        <ul>
                                            @foreach($news as $new)
                                            <li><a href="/new/{{$new->slug}}">{{$new->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="/contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="search-right">
                    <div class="menu-toggle"><span></span></div>

                    <ul class="login-cart">
                        <li>
                            @if(Auth::guard('web')->check())
                            <div class="login-head">
                                <a href="/logout"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                            </div>
                            <!-- {{ Auth::guard('web')->user()->name  }}  -->
                            @else
                            <div class="login-head">
                                <a href="/login"><i class="fa fa-user-o" aria-hidden="true"></i></a>
                            </div>
                            @endif

                        </li>
                        @if(Auth::guard('web')->check())
                        <li>
                            <a href="/cart">
                                <div class="cart-menu">
                                    <div class="cart-icon position-r">
                                        <img src="/asset_client/images/car-icon-w.png" class="position-r transition"
                                            alt="cart">
                                    </div>
                                </div>
                            </a>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>