<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('client.homepage.index');
});

Route::group(['prefix' => '/client'], function () {
    Route::get('/', function () {
        return view('client.homepages.index');
    });
});
Route::group(['prefix' => '/cart'], function () {
    Route::get('/', function () {
    return view ('client.cart.index');
    });

});
Route::group(['prefix' => '/news'], function () {
    Route::get('/', function () {
    return view ('client.news.index');
    });

});
Route::group(['prefix' => '/news-detail'], function () {
    Route::get('/', function () {
    return view ('client.news-detail.index');
    });

});
Route::group(['prefix' => '/checkout'], function () {
    Route::get('/', function () {
    return view ('client.checkout.index');
    });

});
Route::group(['prefix' => '/product-detail'], function () {
    Route::get('/', function () {
    return view ('client.product-detail.index');
    });

});
Route::group(['prefix' => '/product'], function () {
    Route::get('/', function () {
    return view ('client.product.index');
    });

});
Route::group(['prefix' => '/product-list'], function () {
    Route::get('/', function () {
    return view ('client.product-list.index');
    });

});
Route::get('/', [App\Http\Controllers\OrderController::class, 'index']);


Route::group(['prefix' => '/login'], function () {
    Route::get('/', function () {
        return view ('login.index');
        });

});


Route::group(['prefix' => '/register'], function () {
    Route::get('/', function () {
        return view ('register.index');
        });

});