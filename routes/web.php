<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;



Route::get('/register', function () {
    return view('register.index');
})->name('register');

// Route::get('/app', function () {
//     return view('layout.app');
// });

Route::get('/',[LoginController::class,'login'])->name('home');

Route::get('/login', function () {
    return view('login.index');
})->name('login');



/** Akses route user user (student) */
Route::middleware('user')->prefix('student')->group(function () {
    Route::get('/',[StudentController::class,'index']);
    Route::post('/add',[StudentController::class,'create']);
});

/** Akses route user admin */
Route::middleware('admin')->prefix('admin')->group(function () {
    Route::get('/',[AdminController::class,'index']);
    Route::get('/category/add', function () {
        return view('category.form');
    });
    Route::post('/category/add',[CategoryController::class,'create']);
    Route::get('/category',[CategoryController::class,'index']);
});

Route::post('/login',[LoginController::class,'authenticate']);

Route::post('/register',[UserController::class,'createUser']);

Route::post('/logout',[LoginController::class,'actionlogout']);

Route::get('/test',[UserController::class,'getUsersWithPage']);


