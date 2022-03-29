<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;

Route::get('/', [HomeController::class, "show"]);

Route::controller(PostsController::class)->group(function () {

    Route::middleware('auth')->group(function () {

        Route::get('/posts/create', "create");
        Route::post('/posts', "store");
        Route::get('/posts/{post}/edit', "edit");
        Route::patch('/posts/{post}', "update");
        Route::delete('/posts/{post}', "destroy");

    });
    Route::get('/posts/{post}', "show");
});

Route::post('/posts/{post}/comments', [CommentsController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
