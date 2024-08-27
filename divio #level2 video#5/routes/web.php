<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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



Route::get('posts',[PostController::class,'index']);
Route::get('/',[PostController::class,'home']);

Route::get('posts/create',[PostController::class,'create']);

Route::get('posts/{id}/edit',[PostController::class,'edit']);


Route::post('posts', [PostController::class, 'store']);



Route::get('posts/{id}',[PostController::class,'show']);
Route::delete('posts/{id}', [PostController::class, 'destroy3']);
Route::put('posts/{id}',[PostController::class,'update']);
    