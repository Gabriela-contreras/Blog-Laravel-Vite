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
                <a href="{{ route('login') }}"
                    class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-purple-600 transition-all hover-lift">
                    <i class="fas fa-user mr-2"></i>
                    Iniciar Sesión
                </a>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </section>

    <!-- Posts Preview Section -->
    <section id="posts" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Últimos Posts</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Descubre nuestro contenido más reciente. Inicia sesión para acceder a todos los posts y crear tu propio contenido.
                </p>
            </div>

            @if($latestPosts && $latestPosts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    @foreach($latestPosts as $post)
                        @include('components.cardPostGuest', ['post' => $post])
                    @endforeach
                </div>
                
                <!-- Call to Action -->
                <div class="text-center">
                    <div class="bg-white rounded-2xl shadow-lg p-8 max-w-2xl mx-auto">
                        <h3 class="text-2xl font-bold text-gray-900 mb-4">
                            ¿Quieres ver más contenido?
                        </h3>
                        <p class="text-gray-600 mb-6">
                            Inicia sesión para acceder a todos nuestros posts, crear tu propio contenido y ser parte de nuestra comunidad.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                            <a href="{{ route('login') }}" 
                               class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:from-purple-700 hover:to-blue-700 transition-all">
                                <i class="fas fa-sign-in-alt mr-2"></i>
                                Iniciar Sesión
                            </a>
                            <a href="{{ route('register.form') }}" 
                               class="border-2 border-gray-300 text-gray-700 px-6 py-3 rounded-full font-semibold hover:border-gray-400 hover:bg-gray-50 transition-all">
                                <i class="fas fa-user-plus mr-2"></i>
                                Registrarse
                            </a>
                        </div>
                    </div>
                </div>
            @else
                <div class="text-center py-12">
                    <div class="bg-white rounded-lg p-8 shadow-lg">
                        <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253z" />
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Aún no hay posts disponibles</h3>
                        <p class="text-gray-500 mb-6">Sé el primero en crear contenido para nuestra comunidad.</p>
                        <a href="{{ route('login') }}" 
                           class="bg-gradient-to-r from-purple-600 to-blue-600 text-white px-6 py-3 rounded-full font-semibold hover:from-purple-700 hover:to-blue-700 transition-all">
                            Iniciar Sesión
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </section>

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

        .hover-lift {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-4px);
        }
    </style>
@endsection