<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

//site
Route::get('/', [SiteController::class,'index'])->name('site.index');
Route::get('/login', [AdminController::class,'login'])->name('admin.login');
//admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
});
