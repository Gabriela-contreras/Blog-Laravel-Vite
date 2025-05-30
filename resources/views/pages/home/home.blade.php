@extends('layouts.app')


@section('title', 'Inicio - Mi Blog Personal')

@section('content')
    <!-- Hero Section -->
    <section class="gradient-bg min-h-screen flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>

        <!-- Animated background elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white opacity-10 rounded-full animate-pulse"></div>
        <div class="absolute top-32 right-20 w-16 h-16 bg-white opacity-10 rounded-full animate-bounce"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white opacity-10 rounded-full animate-ping"></div>

        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in">
                Bienvenido a Mi Blog
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto opacity-90">
                Un espacio donde las ideas cobran vida. Descubre historias inspiradoras,
                consejos útiles y perspectivas únicas sobre los temas que más te interesan.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#posts"
                    class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all hover-lift">
                    <i class="fas fa-book-open mr-2"></i>
                    Explorar Posts
                </a>
                <a href="{{ url('/post/create') }}"
                    class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-purple-600 transition-all hover-lift">
                    <i class="fas fa-pen mr-2"></i>
                    Escribir Post
                </a>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </section>


    {{-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"> --}}
        <!-- Features Section -->
        <section class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-bold text-gray-900 mb-4">¿Por qué elegirnos?</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Descubre las características que hacen de nuestro blog un lugar especial para compartir y
                        descubrir contenido de calidad.
                    </p>
                </div>


                {{-- @include('home.cardNosotros'); --}}



            </div>
    </div>
    </section>

    <style>
        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }
    </style>
@endsection
