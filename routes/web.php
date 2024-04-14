<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);
Route::get('post/create', [PostController::class, 'create']);
Route::post('post/create-post', [PostController::class, 'createPost']);
Route::get('post/{id}', [PostController::class, 'getPost']);
Route::delete('post/delete/{id}', [PostController::class, 'deletePost']);