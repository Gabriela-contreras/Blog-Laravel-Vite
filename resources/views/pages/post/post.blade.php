@extends('layouts.app')

@section('title', 'Posts - Mi Blog Personal')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Todos los Posts</h1>

        @if($posts && $posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                    <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-r from-green-400 to-blue-400">
                            <img class="w-full h-full object-cover opacity-80"
                                src="https://hips.hearstapps.com/hmg-prod/images/casa-madrid-estilo-tradicional-moderno-salon-vista-general-c2101-r1883734-1606477694.jpg"
                                alt="{{ $post->titulo }}">
                        </div>
                        <div class="p-6">
                            <span class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full mb-3">
                                {{ $post->categoria ? $post->categoria->nombre : 'Lifestyle' }}
                            </span>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $post->titulo }}</h3>
                            <p class="text-gray-600 mb-4">
                                {{ Str::limit($post->contenido, 150) }}
                            </p>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center space-x-2">
                                    <div class="w-8 h-8 bg-gradient-to-r from-blue-400 to-green-400 rounded-full flex items-center justify-center">
                                        <span class="text-white text-sm font-semibold">
                                            {{ $post->usuario ? substr($post->usuario->name, 0, 1) : 'U' }}
                                        </span>
                                    </div>
                                    <span class="text-sm text-gray-500">
                                        {{ $post->usuario ? $post->usuario->name : 'Usuario' }}
                                    </span>
                                </div>
                                <div class="text-xs text-gray-400">
                                    {{ $post->created_at ? $post->created_at->format('d/m/Y') : 'Fecha' }}
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <div class="bg-gray-100 rounded-lg p-8">
                    <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253z" />
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No hay posts disponibles</h3>
                    <p class="text-gray-500">Aún no se han creado posts.</p>
                </div>
            </div>
        @endif
    </div>

    <style>
        .hover-lift:hover {
            transform: translateY(-4px);
        }
    </style>
@endsection
