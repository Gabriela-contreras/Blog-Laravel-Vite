<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/welcome');
});


Route::get('pages/home/home', function () {
    return view('pages/home/home');
});
Route::get('pages/home/home', [HomeController::class, 'getHome'])->name('home');


Route::get('category', function () {
    return view('pages/category/category');
});

Route::get('category/show', function () {
    return view('pages/category/show');
});

Route::get('category/create', function () {
    return view('pages/category/create');
});

Route::get('category/edit', function () {
    return view('pages/category/edit');
});



//posts
//edit
Route::get('post/edit', function () {
    return view('pages/post/edit');
});
Route::post('post/post/edit', [PostController::class, 'updatePost'])->name('post');

//create
Route::get('post/create', function () {
    return view('pages/post/create');
});
Route::post('post/post/create', [PostController::class, 'createPost'])->name('post');

// Ruta para mostrar posts
Route::get('post/post', [PostController::class, 'MostrarPosts'])->name('posts.list');




//rutas register back y front
Route::get('register/register', function () {
    return view('pages/register/register');
});
Route::post('register', [AuthController::class, 'register'])->name('register');




//rutas login backend y front
Route::get('login/login', function () {
    return view('pages/login/login');
})->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');

// Route::post('logout/logout', [AuthController::class, 'logout']);
