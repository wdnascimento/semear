<?php

use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){
    // HOME
    Route::get('/', [IndexController::class,'index'])->name('admin.index');
    // User Routes
    Route::get('user', [UserController::class,'index'])->name('admin.user.index');
    Route::get('user/create', [UserController::class, 'create'])->middleware('can:admin')->name('admin.user.create');
    Route::post('user/store', [UserController::class, 'store'])->middleware('can:admin')->name('admin.user.store');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->middleware('can:admin')->name('admin.user.edit');
    Route::get('user/show/{id}', [UserController::class, 'show'])->middleware('can:admin')->name('admin.user.show');
    Route::put('user/update/{id}', [UserController::class, 'update'])->name('admin.user.update');
    Route::delete('user/destroy/{id}', [UserController::class, 'destroy'])->middleware('can:admin')->name('admin.user.destroy');

     // User password
    Route::get('user/show-password/{id}', [UserController::class, 'showPassword'])->name('admin.user.show-password');
    Route::put('user/update-password/{id}', [UserController::class, 'updatePassword'])->name('admin.user.update-password');
});
