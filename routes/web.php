<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\Site\SiteController;
use Illuminate\Support\Facades\Route;

//site
Route::get('/', [SiteController::class,'index'])->name('index');


//admin
Route::prefix('admin')->group(function () {
    Route::get('/', AdminController::class,'index')->name('admin.index');
});