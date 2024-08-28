<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TakController;
use App\Http\Controllers\PostController;


Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/about', [TakController::class, 'about'])->name('about');
Route::get('/service', [TakController::class, 'service'])->name('service');
Route::get('/project', [TakController::class, 'project'])->name('project');
Route::get('/contact', [TakController::class, 'contact'])->name('contact');

Route::resource('posts', PostController::class);
