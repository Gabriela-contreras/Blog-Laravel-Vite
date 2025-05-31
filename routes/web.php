<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home/home');
});


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

Route::get('post/create', function () {
    return view('pages/post/create');
});

Route::get('post/edit', function () {
    return view('pages/post/edit');
});

Route::get('register/register', function () {
    return view('pages/register/register');
});

// Ruta para mostrar posts - ASEGÚRATE de que retorne la vista correcta
Route::get('post/post', [PostController::class, 'MostrarPosts'])->name('posts.list');
Route::get('register/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register/register', [AuthController::class, 'register']);
Route::get('login/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login/login', [AuthController::class, 'login']);
Route::post('logout/logout', [AuthController::class, 'logout'])->name('logout');
