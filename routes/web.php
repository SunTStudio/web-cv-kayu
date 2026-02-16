<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// artikel.index
// display artikel di landing page
Route::get('/artikel/all',[ArticleController::class,'showAll'])->name('artikel.show.all');
Route::get('/artikel/detail/{id}',[ArticleController::class,'detail'])->name('artikel.detail');

Route::get('/artikel/manage',[ArticleController::class,'index'])->name('artikel.index');
Route::get('/artikel/buat',[ArticleController::class,'create'])->name('artikel.create');
Route::post('/artikel/simpan',[ArticleController::class,'store'])->name('artikel.store');

// artikel.show