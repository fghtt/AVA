<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\LikeController;
use App\Http\Controllers\Api\CommentController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    #Posts
    Route::group(['prefix' => 'posts'], function () {
        Route::get('/', [PostController::class, 'index'])->name('post.index');
        Route::post('/', [PostController::class, 'store'])->name('post.store');
        Route::patch('/{post}', [PostController::class, 'update'])->name('post.update');
        Route::delete('/{post}', [PostController::class, 'delete'])->name('post.delete');
    } );

    #Likes
    Route::group(['prefix' => 'likes'], function () {
        Route::post('/', [LikeController::class, 'store'])->name('like.store');
        Route::delete('/{post}', [LikeController::class, 'delete'])->name('like.delete');
    });

    Route::group(['prefix' => 'comments'], function () {
        Route::post('/', [CommentController::class, 'store'])->name('comment.store');
        Route::patch('/{comment}', [CommentController::class, 'update'])->name('comment.update');
        Route::delete('/{comment}', [CommentController::class, 'delete'])->name('comment.delete');
    });
});
