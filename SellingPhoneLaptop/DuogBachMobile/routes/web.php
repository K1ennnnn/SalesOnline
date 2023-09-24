<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Brand\BrandController;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Order\OrderController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\ProductDetail\ProductDetailController;
use App\Http\Controllers\Admin\ProductImage\ProductImageController;
use App\Http\Controllers\Admin\User\UserController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Router Frontend

// Router Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, "index"]);
    Route::group(['prefix' => 'product'], function () {
        Route::get('/', [ProductController::class, "index"]);
        Route::get('/create', [ProductController::class, "create"]);
        Route::get('/show', [ProductController::class, "show"]);
        Route::post('/store', [ProductController::class, "store"]);
        Route::get('/edit', [ProductController::class, "edit"]);
        Route::post('/update', [ProductController::class, "update"]);
        Route::get('/destroy', [ProductController::class, "destroy"]);
        
        Route::group(['prefix' => 'product-detail'], function () {
            Route::get('/', [ProductDetailController::class, "index"]);
            Route::get('/create', [ProductDetailController::class, "create"]);
            Route::post('/store', [ProductDetailController::class, "store"]);
            Route::get('/edit', [ProductDetailController::class, "edit"]);
            Route::post('/update', [ProductDetailController::class, "update"]);
            Route::get('/destroy', [ProductDetailController::class, "destroy"]);
        });

        Route::group(['prefix' => 'product-image'], function () {
            Route::get('/', [ProductImageController::class, "index"]);
        });
    });
    Route::group(['prefix' => 'category'], function () {
        Route::get('/', [CategoryController::class, "index"]);
        Route::get('/create', [CategoryController::class, "create"]);
        Route::post('/store', [CategoryController::class, "store"]);
        Route::get('/edit', [CategoryController::class, "edit"]);
        Route::post('/update', [CategoryController::class, "update"]);
        Route::get('/destroy', [CategoryController::class, "destroy"]);
    });
    Route::group(['prefix' => '/brand'], function () {
        Route::get('/', [BrandController::class, "index"]);
        Route::get('/create', [BrandController::class, "create"]);
        Route::post('/store', [BrandController::class, "store"]);
        Route::get('/edit', [BrandController::class, "edit"]);
        Route::post('/update', [BrandController::class, "update"]);
        Route::get('/delete', function () {
            return 'delete';
        });
    });
    Route::group(['prefix' => '/user'], function () {
        Route::get('/', [UserController::class, "index"]);
        Route::get('/create', [UserController::class, "create"]);
        Route::post('/store', [UserController::class, "store"]);
        Route::get('/edit', [UserController::class, "edit"]);
        Route::post('/update', [UserController::class, "update"]);
        Route::get('/delete', function () {
            return 'delete';
        });
    });
    Route::group(['prefix' => '/order'], function () {
        Route::get('/', [OrderController::class, "index"]);
        Route::get('/show', [OrderController::class, "show"]);
    });
});
