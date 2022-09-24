<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" navigation-header">
                <span>Quản lí</span>
                <i class=" feather icon-minus" data-toggle="tooltip" data-placement="right"
                    data-original-title="General"></i>
            </li>
            <li class="nav-item {{str_contains($routeName, 'category') ? 'active' : ''}}"><a href="/admin/category">
                    <i class="feather icon-server"></i>
                    <span class="menu-title" data-i18n="Category">Category</span></a>
            </li>
            <li class="nav-item {{str_contains($routeName, 'news') ? 'active' : ''}}"><a href=" /admin/news">
                    <i class="feather icon-book"></i>
                    <span class="menu-title" data-i18n="News">News
                    </span></a>
            </li>
            <li class="nav-item {{str_contains($routeName, 'supplier') ? 'active' : ''}}"><a href=" /admin/supplier">
                    <i class="feather icon-package"></i>
                    <span class="menu-title" data-i18n="Suppliers">Suppliers</span></a>
            </li>
            <li class="nav-item {{str_contains($routeName, 'product') ? 'active' : ''}}"><a href=" /admin/product">
                    <i class="feather icon-codepen"></i>
                    <span class="menu-title" data-i18n="Products">Products</span></a>
            </li>
            <li class="nav-item {{str_contains($routeName, 'slider') ? 'active' : ''}}"><a href=" /admin/slider">
                    <i class="feather icon-book"></i>
                    <span class="menu-title" data-i18n="Sliders">Sliders</span></a>
            </li>
    </div>
</div>