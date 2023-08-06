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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users',[UserController::class,'index'])->middleware('auth:sanctum');
Route::get('/users/{id}',[UserController::class,'show'])->middleware('auth:sanctum');

Route::get('/posts',[UserController::class,'index'])->middleware('auth:sanctum');
Route::get('/posts/{id}',[UserController::class,'show'])->middleware('auth:sanctum');
Route::get('/posts',[UserController::class,'store'])->middleware('auth:sanctum');
Route::get('/posts/{id}',[UserController::class,'update'])->middleware('auth:sanctum');
Route::get('/posts/{id}',[UserController::class,'destroy'])->middleware('auth:sanctum');
