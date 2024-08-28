<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\TakController;


Route::get('/', [UserControler::class, 'index']);
////Route::get('/welcome', [UserControler::class, 'wel']);
//
//Route::get('/index/{user?}', [TakController::class, 'index']);
//
//Route::get('bir', function () {
//   return 'bir';
//});
//Route::get('ikki', function () {
//   return 'ikki';
//});
//
//Route::redirect('/bir', '/ikki');
//
Route::get('/index', [UserControler::class, 'index']);
Route::get('/welcome', [UserControler::class, 'ma']);
Route::post('/user-controller', [UserControler::class, 'hello']);
