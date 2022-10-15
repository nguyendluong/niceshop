<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\CKEditorController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\User\UsersController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

Route::match(['get', 'post'], '/login', [LoginController::class, 'login'])->name('admin.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::middleware('auth:admin')->group(function (){
    Route::get('/', [HomeController::class, 'index'])->name('admin.dashboard');

    Route::group(['prefix' => '/category'], function () {
        Route::get('/', [CategoryController::class, 'index']);

        Route::get('/create', [CategoryController::class, 'create']);
        Route::post('/create', [CategoryController::class, 'store']);

        Route::get('/update/{id}', [CategoryController::class, 'edit']);
        Route::post('/update/{id}', [CategoryController::class, 'update']);

        Route::get('/delete/{id}', [CategoryController::class, 'destroy']);
    });


    Route::group(['prefix' => '/news'], function () {
        Route::get('/', [NewsController::class, 'index']);

        Route::get('/create', [NewsController::class, 'create']);
        Route::post('/create', [NewsController::class, 'store']);

        Route::get('/update/{id}', [NewsController::class, 'edit']);
        Route::post('/update/{id}', [newsController::class, 'update']);

        Route::get('/delete/{id}', [NewsController::class, 'destroy']);
    });

    Route::group(['prefix' => '/users'], function () {
        Route::get('/', [UsersController::class, 'index']);
    });
    Route::group(['prefix' => '/orders'], function () {
        Route::get('/', [OrderController::class, 'index']);
    });



    Route::group(['prefix' => '/supplier'], function () {
        Route::get('/', [SupplierController::class, 'index']);

        Route::get('/create', [SupplierController::class, 'create']);
        Route::post('/create', [SupplierController::class, 'store']);

        Route::get('/update/{id}', [SupplierController::class, 'edit']);
        Route::post('/update/{id}', [SupplierController::class, 'update']);

        Route::get('/delete/{id}', [SupplierController::class, 'destroy']);
    });



    Route::group(['prefix' => '/product'], function () {
        Route::get('/', [ProductController::class, 'index']);

        Route::get('/create', [ProductController::class, 'create']);
        Route::post('/create', [ProductController::class, 'store']);

        Route::get('/update/{id}', [ProductController::class, 'edit']);
        Route::post('/update/{id}', [ProductController::class, 'update']);

        Route::get('/delete/{id}', [ProductController::class, 'destroy']);

        Route::post('/fileStore', [ProductController::class, 'fileStore']);
        Route::post('/fileUpdate/{id}', [ProductController::class, 'fileUpdate']);
        Route::post('/deletePreview',[ProductController::class, 'destroyImage']);
    });

    Route::group(['prefix' => '/gallery'], function () {
        Route::delete('/delete/{id}', [GalleryController::class, 'destroy']);
    });

    Route::group(['prefix' => '/slider'], function () {
        Route::get('/', [SlidersController::class, 'index']);

        Route::get('/create', [SlidersController::class, 'create']);
        Route::post('/create', [SlidersController::class, 'store']);

        Route::get('/update/{id}', [SlidersController::class, 'edit']);
        Route::post('/update/{id}', [SlidersController::class, 'update']);

        Route::get('/delete/{id}', [SlidersController::class, 'destroy']);
    });
    
    Route::group(['prefix' => '/sliders'], function () {
        Route::delete('/delete/{id}', [SlidersController::class, 'destroy']);
    });

    // Router ckeditor upload
    Route::post('/ckeditor/image_upload', [CKEditorController::class, 'upload'])->name('admin.upload');

});