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
// Route::get('/', [App\Http\Controllers\HomepageController::class, 'index']);

// Route::get('/index', [\App\Http\Controllers\TestController::class, 'index']);
Route::group(['prefix' => '/admin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::group(['prefix' => '/category'], function () {
        Route::get('/', [App\Http\Controllers\CategoryController::class, 'index']);

        Route::get('/create', [App\Http\Controllers\CategoryController::class, 'create']);
        Route::post('/create', [App\Http\Controllers\CategoryController::class, 'store']);

        Route::get('/update/{id}', [App\Http\Controllers\CategoryController::class, 'edit']);
        Route::post('/update/{id}', [App\Http\Controllers\CategoryController::class, 'update']);

        Route::get('/delete/{id}', [App\Http\Controllers\CategoryController::class, 'destroy']);
    });
    Route::group(['prefix' => '/news'], function () {
        // Route::get('/', function () {
        //     return view('admin.news.index');
        Route::get('/', [App\Http\Controllers\NewsController::class, 'index']);

        Route::get('/create', [App\Http\Controllers\NewsController::class, 'create']);
        Route::post('/create', [App\Http\Controllers\NewsController::class, 'store']);

        Route::get('/update/{id}', [App\Http\Controllers\NewsController::class, 'edit']);
        Route::post('/update/{id}', [App\Http\Controllers\newsController::class, 'update']);

        Route::get('/delete/{id}', [App\Http\Controllers\NewsController::class, 'destroy']);

    });

    Route::group(['prefix' => '/supplier'], function () {
        Route::get('/', [App\Http\Controllers\SupplierController::class, 'index']);

        Route::get('/create', [App\Http\Controllers\SupplierController::class, 'create']);
        Route::post('/create', [App\Http\Controllers\SupplierController::class, 'store']);

        Route::get('/update/{id}', [App\Http\Controllers\SupplierController::class, 'edit']);
        Route::post('/update/{id}', [App\Http\Controllers\SupplierController::class, 'update']);

        Route::get('/delete/{id}', [App\Http\Controllers\SupplierController::class, 'destroy']);
    });

    Route::group(['prefix' => '/product'], function () {
        Route::get('/', [App\Http\Controllers\ProductController::class, 'index']);

        Route::get('/create', [App\Http\Controllers\ProductController::class, 'create']);
        Route::post('/create', [App\Http\Controllers\ProductController::class, 'store']);
      
        Route::get('/update/{id}', [App\Http\Controllers\ProductController::class, 'edit']);
        Route::post('/update/{id}', [App\Http\Controllers\ProductController::class, 'update']);

        Route::get('/delete/{id}', [App\Http\Controllers\ProductController::class, 'destroy']);

        Route::post('/fileStore', [App\Http\Controllers\ProductController::class, 'fileStore']);
        Route::post('/fileUpdate/{id}', [App\Http\Controllers\ProductController::class, 'fileUpdate']);
        Route::post('/deletePreview',[App\Http\Controllers\ProductController::class, 'destroyImage']);
    });

    Route::group(['prefix' => '/gallery'], function () {
        Route::delete('/delete/{id}', [App\Http\Controllers\GalleryController::class, 'destroy']);
    });

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
    Route::get('/', [App\Http\Controllers\TestViewController::class, 'index']);

});

Route::group(['prefix' => '/register'], function () {
    Route::get('/', [App\Http\Controllers\TestViewController::class, 'index1']);

});
// Router ckeditor upload
Route::post('/ckeditor/image_upload', [App\Http\Controllers\CKEditorController::class, 'upload'])->name('upload');