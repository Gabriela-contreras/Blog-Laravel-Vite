<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::get('/', function () {
    return view('pages/welcome');
})->name('welcome');

// Ruta para ver posts (pública)
Route::get('/posts', [PostController::class, 'MostrarPosts'])->name('posts.list');

// Ruta para ver detalle de un post (pública - accesible para todos)
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

// Rutas de autenticación
Route::middleware('guest')->group(function () {
    // Rutas de login
    Route::get('login/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login/login', [AuthController::class, 'login'])->name('login.post'); // Cambiado aquí

    // Rutas de registro
    Route::get('register/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('register/register', [AuthController::class, 'register'])->name('register'); // Cambiado aquí
});

// Ruta de logout (solo para usuarios autenticados)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Rutas protegidas (requieren autenticación)
Route::middleware(['auth'])->group(function () {
    // Página principal después del login
    Route::get('pages/home/home', [HomeController::class, 'getHome'])->name('home');

    // Rutas de categoría (protegidas)
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
    
    // Rutas de post (protegidas)
    Route::get('post/create', function () {
        return view('pages/post/create');
    });
    Route::post('/create-post', [PostController::class, 'createPost'])->name('post')->middleware('check.auth');

    Route::get('post/edit', function () {
        return view('pages/post/edit');
    });
    Route::post('post/post/edit', [PostController::class, 'updatePost'])->name('post.update')->middleware('check.auth');

    // Ruta para mostrar posts
    Route::get('post/post', [PostController::class, 'MostrarPosts'])->name('posts.list');

    // Rutas para posts (requieren autenticación)
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{id}', [PostController::class, 'updatePost'])->name('posts.update');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

});