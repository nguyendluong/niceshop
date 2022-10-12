<?php

use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\NewsController;
use App\Http\Controllers\User\ProductController;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('login');
// view login return view ('login.index');
Route::middleware('auth')->group(function (){
    // Router with authentication example /cart, /payment, /my-order,...
});

Route::get('/register', function () {
    return view ('register.index');
});
Route::get('/login', function () {
    return view ('login.index');
});


Route::get('/', [HomeController::class, 'index'])->name('client.home');
Route::get('/products/{cat_slug}', [ProductController::class, 'list'])->name('client.product_list');
Route::get('/product/{slug}', [ProductController::class, 'detail'])->name('client.product_detail');
// Route::get('/', function () {
//     return view('client.homepages.index');
// });
Route::get('/news/{slug}', [NewsController::class, 'detail'])->name('client.news_detail');

Route::get('/client', function () {
    return view('client.homepages.index');
});

Route::get('/cart', function () {
    return view ('client.cart.index');
});

Route::get('/news', function () {
    return view ('client.news.index');
});

Route::get('/news-detail', function () {
    return view ('client.news-detail.index');
});

Route::get('/checkout', function () {
    return view ('client.checkout.index');
});

Route::get('/product-detail', function () {
    return view ('client.product-detail.index');
});

Route::get('/product', function () {
    return view ('client.product.index');
});

Route::get('/product-list', function () {
    return view ('client.product-list.index');
});
Route::get('/contact', function () {
    return view ('client.contact.index');
});

