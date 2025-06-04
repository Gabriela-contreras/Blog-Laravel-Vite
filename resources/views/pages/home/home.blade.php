@extends('layouts.app')

@section('title', 'Inicio - Mi Blog Personal')

@section('content')
    <!-- Hero Section -->
    <section class="bg-[#cfbdaa] min-h-screen flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>

        <!-- Animated background elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white opacity-10 rounded-full animate-pulse"></div>
        <div class="absolute top-32 right-20 w-16 h-16 bg-white opacity-10 rounded-full animate-bounce"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white opacity-10 rounded-full animate-ping"></div>

        <div class="relative z-10 text-center text-white px-4">
            <div class="flex flex-row justify-around items-center w-full">
                <div class="flex flex-col ">
                    <h1 class="text-4xl md:text-7xl font-bold mb-6 animate-fade-in">
                        Bienvenido !!
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto opacity-90">
                        Un espacio donde las ideas cobran vida. Descubre historias inspiradoras,
                        consejos útiles y perspectivas únicas sobre los temas que más te interesan.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#categories"
                            class="bg-white text-[#918477] px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all hover-lift">
                            Explorar Categorías
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-6xl font-light text-stone-800 mb-8 tracking-tight">
                    Explora por Categorías
                </h2>
                <p class="text-xl text-stone-600 max-w-3xl mx-auto leading-relaxed font-light">
                    Descubre inspiración organizada por espacios. Cada categoría está cuidadosamente curada para ofrecerte 
                    las mejores ideas de diseño interior.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Aquí van las 4 categorías -->
                @php
                    $categorias = [
                        ['id' => 1, 'nombre' => 'Sala de Estar', 'descripcion' => 'Espacios acogedores donde la comodidad se encuentra con el estilo. Descubre ideas para crear el corazón de tu hogar.', 'imagen' => 'https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'],
                        ['id' => 2, 'nombre' => 'Dormitorio', 'descripcion' => 'Tu santuario personal de descanso y relajación. Ideas para crear un refugio de paz y tranquilidad.', 'imagen' => 'https://images.unsplash.com/photo-1560448204-e02f11c3d0e2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'],
                        ['id' => 3, 'nombre' => 'Cocina', 'descripcion' => 'El epicentro culinario donde funcionalidad y belleza se unen. Diseños que inspiran creatividad gastronómica.', 'imagen' => 'https://images.unsplash.com/photo-1556909114-f6e7ad7d3136?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'],
                        ['id' => 4, 'nombre' => 'Baño', 'descripcion' => 'Espacios de bienestar y renovación personal. Transforma tu rutina diaria en una experiencia spa.', 'imagen' => 'https://images.unsplash.com/photo-1620626011761-996317b8d101?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80'],
                    ];
                @endphp

                @foreach($categorias as $cat)
                <div class="category-card group cursor-pointer" onclick="window.location.href='{{ url('/posts?categoria=' . $cat['id']) }}'">
                    <div class="relative overflow-hidden rounded-3xl shadow-lg bg-white hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                        <div class="relative aspect-[4/3]">
                            <img src="{{ $cat['imagen'] }}" 
                                alt="{{ $cat['nombre'] }}" 
                                class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-semibold text-stone-800 mb-4 group-hover:text-[#cfbdaa] transition-colors duration-300">
                                {{ $cat['nombre'] }}
                            </h3>
                            <p class="text-stone-600 leading-relaxed font-light text-sm">
                                {{ $cat['descripcion'] }}
                            </p>
                            <div class="mt-6 flex items-center text-[#cfbdaa] group-hover:text-stone-800 transition-colors duration-300">
                                <span class="text-sm font-medium">Explorar</span>
                                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>  

    <!-- Posts Preview Section -->
    <section id="posts" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-6xl font-light text-stone-800 mb-8 tracking-tight">Últimos Posts</h2>
                <p class="text-xl text-stone-600 max-w-3xl mx-auto leading-relaxed font-light">
                    Descubre nuestro contenido más reciente. Inicia sesión para acceder a todos los posts y crear tu propio
                    contenido.
                </p>
            </div>

            @if ($latestPosts && $latestPosts->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    @foreach ($latestPosts as $post)
                        @include('components.cardPost', ['post' => $post])
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <div class="bg-white rounded-lg p-8 shadow-lg">
                        <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253z" />
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Aún no hay posts disponibles</h3>
                        <p class="text-gray-500 mb-6">Sé el primero en crear contenido para nuestra comunidad.</p>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-32 bg-gradient-to-b from-white to-stone-50">
        <div class="max-w-7xl mx-auto px-8">
            <div class="text-center mb-24">
                <h2 class="text-6xl font-light text-stone-800 mb-8 tracking-tight">
                    Nuestro Enfoque
                </h2>
                <p class="text-xl text-stone-600 max-w-3xl mx-auto leading-relaxed font-light">
                    Creemos que cada espacio tiene el potencial de transformar vidas. Nuestro compromiso es hacer realidad
                    esa transformación.
                </p>
            </div>

            <div class="grid grid-cols-3 gap-16">
                <div class="text-center group">
                    <div class="w-28 h-28 bg-[#e7ddd3] rounded-full flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-transform duration-500 shadow-lg">
                        <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-stone-800 mb-6">Inspiración Única</h3>
                    <p class="text-stone-600 leading-relaxed font-light">
                        Cada proyecto nace de una inspiración auténtica, creando espacios que reflejan personalidad y estilo
                        único.
                    </p>
                </div>

                <div class="text-center group">
                    <div class="w-28 h-28 bg-[#cfbdaa] rounded-full flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-transform duration-500 shadow-lg">
                        <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-stone-800 mb-6">Calidad Artesanal</h3>
                    <p class="text-stone-600 leading-relaxed font-light">
                        Atención meticulosa a cada detalle, utilizando materiales selectos y técnicas que perduran en el
                        tiempo.
                    </p>
                </div>

                <div class="text-center group">
                    <div class="w-28 h-28 bg-[#918477] rounded-full flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-transform duration-500 shadow-lg">
                        <svg class="w-14 h-14 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-stone-800 mb-6">Pasión por el Detalle</h3>
                    <p class="text-stone-600 leading-relaxed font-light">
                        Nuestro amor por el diseño se refleja en cada elección, desde la paleta de colores hasta la última
                        textura.
                    </p>
                </div>
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

         .category-card {
            transition: all 0.3s ease;
        }

        .category-card:hover {
            transform: translateY(-8px);
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
