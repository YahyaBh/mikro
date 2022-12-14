<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Front\FrontHomeController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontHomeController::class, 'index'])->name('front.home');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::post('/post_add', [FrontHomeController::class, 'add_post'])->name('front.post.add');
    Route::get('/post/{id}', [FrontHomeController::class, 'show']);

    Route::get('product/like/{id}', ['as' => 'product.like', 'uses' => 'LikeController@likeProduct']);
    Route::get('post/like/{id}', [LikeController::class, 'likePost']);

    Route::middleware('admin:web')->group(function () {
        Route::get('/dashboard', [AdminHomeController::class, 'index'])->name('dashboard');
        Route::get('/category', [CategoryController::class, 'index'])->name('admin.cat.home');
        Route::post('/category_add', [CategoryController::class, 'add_cat'])->name('admin.cat.add');
    });
});
