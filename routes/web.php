<?php

use App\Http\Controllers\CategorizationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SingerController;
use App\Http\Controllers\SongController;
use App\Http\Middleware\MustBeAuthUser;
use Illuminate\Support\Facades\Route;


Route::middleware(MustBeAuthUser::class)->group(function () {
    Route::get('/', [SongController::class, 'index']);
    Route::get('/songs/{singer:name}/', [SingerController::class, 'show']);

    Route::get('/songs/{categorization:slug}/', function () {
        dd('hit');
    });
});


Route::get('/login', [LoginController::class, 'create']);
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::post('/logout', [LogoutController::class, 'destroy']);

Route::get('/hello', function () {
    return 'hit';
});

// Route::get('/post',[PostController::class,'create']);
// Route::post('/post', [PostController::class, 'store']);