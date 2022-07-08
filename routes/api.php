<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('pages', \App\Http\Controllers\Api\PageController::class);

Route::get('posts/category/all', [\App\Http\Controllers\Api\PostCategoryController::class, 'getAllPostCategory']);
Route::apiResource('posts/category', \App\Http\Controllers\Api\PostCategoryController::class);

Route::apiResource('posts', \App\Http\Controllers\Api\PostController::class);
