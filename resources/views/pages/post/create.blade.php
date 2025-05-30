@extends('layouts.app')

@section('title', 'Editar Post - Interior Design Blog')

@section('content')
    <!-- Header -->
    <header class="bg-gradient-to-br from-pinck-100 via-whithe-50 to-brown-100 py-16 mt-10">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h1 class="text-4xl font-light text-stone-800 mb-3">
                Crea tu Post
            </h1>
            <p class="text-lg text-stone-600">
                Perfecciona tu contenido de diseño
            </p>
        </div>
    </header>


    <!-- Form -->
    <main class="py-12 bg-stone-50">
        <div class="max-w-4xl mx-auto px-6">
            <div class="bg-white rounded-lg shadow-sm border border-stone-200">

                {{-- <form class="p-8 space-y-8" method="POST" action="{{ url('/posts/update/' . $id ?? '1') }}" --}}
                {{-- enctype="multipart/form-data">
                    @csrf
                    @method('PUT') --}}

                <!-- Título -->
                <div>
                    <label for="title" class="block text-sm font-medium text-stone-700 mb-2">
                        Título del Post
                    </label>
                    <input type="text" id="title" name="title" value="Tendencias en Decoración Minimalista 2024"
                        class="w-full px-4 py-3 border border-stone-300 rounded-md focus:ring-2 focus:ring-amber-200 focus:border-amber-400"
                        placeholder="Escribe el título de tu post...">
                </div>


                <!-- Nueva Imagen -->
                <div>
                    <label for="poster" class="block text-sm font-medium text-stone-700 mb-2">
                        Adjuntar link Imagen
                    </label>
                    <div>
                        <input type="text" placeholder="Url Image"
                            class="w-full px-4 py-3 border border-stone-300 rounded-md focus:ring-2 focus:ring-blue-200 focus:border-blue-300">
                    </div>
                </div>

                <!-- Contenido -->
                <div>
                    <label for="content" class="block text-sm font-medium text-stone-700 mb-2">
                        Contenido del Post
                    </label>
                    <textarea id="content" name="content" rows="20"
                        class="w-full px-4 py-4 border border-stone-300 rounded-md focus:ring-2 focus:ring-amber-200 focus:border-amber-400"></textarea>
                </div>

                <!-- Botones -->
                <div class="flex items-center justify-between pt-6 border-t border-stone-200">
                    <a href="{{ url('/posts') }}" class="px-4 py-2 text-stone-600 hover:text-stone-800 transition-colors">
                        Cancelar
                    </a>
                    <div class="flex gap-3">
                        <button type="button"
                            class="px-4 py-2 bg-stone-200 text-stone-700 rounded-md hover:bg-stone-300 transition-colors">
                            Guardar Borrador
                        </button>
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
