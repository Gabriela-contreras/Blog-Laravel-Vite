<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home/home');
});

Route::get('login', function () {
    return view('pages/login/login');
});

Route::get('logout', function () {
    return view('pages/logout/logout');
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
// Ruta para mostrar posts - ASEGÚRATE de que retorne la vista correcta
Route::get('post/post', [PostController::class, 'MostrarPosts'])->name('posts.list');
