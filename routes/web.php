<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class , 'homepage'])->name('home');

Route::get('/article/create' ,[ArticleController::class, 'create'])->name('article.create');