@extends('layouts.app')

@section('title', 'Editar Post - Interior Design Blog')

@section('content')
    <!-- Header -->
    <header class="bg-gradient-to-br from-pinck-100 via-whithe-50 to-brown-100 py-16 mt-10">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-light text-stone-800 mb-3">
                Editar Post
            </h1>
            <p class="text-lg text-stone-600">
                Perfecciona tu contenido de diseño
            </p>
        </div>
    </header>

    <!-- Form -->
    <main class="py-12 bg-stone-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white rounded-lg shadow-sm border border-stone-200 p-8">
                
                @if ($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        {{ session('success') }}
                    </div>
                @endif

                <form class="space-y-8" method="POST" action="{{ route('posts.update', $post->id) }}">
                    @csrf
                    @method('PUT')

                    <!-- Título -->
                    <div>
                        <label for="titulo" class="block text-sm font-medium text-stone-700 mb-2">
                            Título del Post
                        </label>
                        <input type="text" id="titulo" name="titulo" value="{{ old('titulo', $post->titulo) }}"
                            class="w-full px-4 py-3 border border-stone-300 rounded-md focus:ring-2 focus:ring-amber-200 focus:border-amber-400"
                            placeholder="Escribe el título de tu post..." required>
                    </div>

                    <!-- Imagen Actual -->
                    @if($post->image)
                        <div>
                            <label class="block text-sm font-medium text-stone-700 mb-2">
                                Imagen Actual
                            </label>
                            <div class="flex items-center gap-4 p-4 bg-stone-50 rounded-md border border-stone-200">
                                <div class="w-20 h-20 rounded-md overflow-hidden">
                                    <img src="{{ $post->image }}" alt="Imagen actual" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1">
                                    <p class="font-medium text-stone-800">Imagen actual del post</p>
                                    <p class="text-sm text-stone-500">Actualizada: {{ $post->updated_at->format('d/m/Y') }}</p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Nueva Imagen -->
                    <div>
                        <label for="image" class="block text-sm font-medium text-stone-700 mb-2">
                            {{ $post->image ? 'Cambiar Imagen (URL)' : 'Agregar Imagen (URL)' }}
                        </label>
                        <input type="url" id="image" name="image" value="{{ old('image', $post->image) }}"
                            class="w-full px-4 py-3 border border-stone-300 rounded-md focus:ring-2 focus:ring-blue-200 focus:border-blue-300"
                            placeholder="https://ejemplo.com/imagen.jpg" required>
                    </div>

                    <!-- Categoría -->
                    <div>
                        <label for="category" class="block text-sm font-medium text-stone-700 mb-2">
                            Categoría
                        </label>
                        <select name="category" id="category" required
                            class="w-full px-4 py-3 border border-stone-300 rounded-md focus:ring-2 focus:ring-blue-200 focus:border-blue-300">
                            <option value="">Seleccionar categoría</option>
                            <option value="living" {{ old('category', $post->categoria->nombre ?? '') == 'living' ? 'selected' : '' }}>Living</option>
                            <option value="cocina" {{ old('category', $post->categoria->nombre ?? '') == 'cocina' ? 'selected' : '' }}>Cocina</option>
                            <option value="baño" {{ old('category', $post->categoria->nombre ?? '') == 'baño' ? 'selected' : '' }}>Baño</option>
                            <option value="dormitorio" {{ old('category', $post->categoria->nombre ?? '') == 'dormitorio' ? 'selected' : '' }}>Dormitorio</option>
                        </select>
                    </div>

                    <!-- Contenido -->
                    <div>
                        <label for="contenido" class="block text-sm font-medium text-stone-700 mb-2">
                            Contenido del Post
                        </label>
                        <textarea id="contenido" name="contenido" rows="20" required
                            class="w-full px-4 py-4 border border-stone-300 rounded-md focus:ring-2 focus:ring-amber-200 focus:border-amber-400"
                            placeholder="Escribe el contenido de tu post...">{{ old('contenido', $post->contenido) }}</textarea>
                    </div>

                    <!-- Botones -->
                    <div class="flex items-center justify-between pt-6 border-t border-stone-200">
                        <a href="{{ route('posts.list') }}" 
                           class="px-4 py-2 text-stone-600 hover:text-stone-800 transition-colors">
                            Cancelar
                        </a>
                        <div class="flex gap-3">
                            <button type="submit"
                                class="px-6 py-2 bg-gradient-to-r from-amber-200 to-orange-300 text-stone-800 rounded-md hover:from-amber-300 hover:to-orange-400 transition-all font-medium">
                                Actualizar Post
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection