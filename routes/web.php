<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

Route::get('/', [HomeController::class, "show"]);

Route::controller(PostsController::class)->group(function () {

    Route::get('/posts/create', "create");
    Route::get('/posts/{post}', "show");
    Route::post('/posts', "store");
    Route::get('/posts/{post}/edit', "edit");
    Route::patch('/posts/{post}', "update");
    Route::delete('/posts/{id}', "destroy");

});

