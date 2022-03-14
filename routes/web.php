<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;

Route::get('/', [HomeController::class, "show"]);

Route::controller(PostsController::class)->group(function () {

    Route::get('/posts/create', "create");
    Route::get('/posts/{post}', "show");
    Route::post('/posts', "store");
    Route::get('/posts/{id}/edit', "edit");
    Route::patch('/posts/{id}', "update");
    Route::delete('/posts/{id}', "destroy");

});

