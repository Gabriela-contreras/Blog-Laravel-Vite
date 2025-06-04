@extends('layouts.app')

@section('title', 'Inicio - Mi Blog Personal')

@section('content')
    <!-- Hero Section -->
    <section class="min-h-screen flex items-center justify-center relative overflow-hidden" style="background: url('https://i.pinimg.com/736x/a5/8f/3e/a58f3ee1929b8a32772fe14ac8fd1746.jpg') no-repeat center center/cover;">
        <div class="absolute inset-0 bg-black opacity-20"></div>

        <!-- Animated background elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white opacity-10 rounded-full animate-pulse"></div>
        <div class="absolute top-32 right-20 w-16 h-16 bg-white opacity-10 rounded-full animate-bounce"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white opacity-10 rounded-full animate-ping"></div>

        <div class="relative z-10 text-center text-white px-4 w-full max-w-7xl">
            <div class="flex flex-row justify-around items-center w-full">
                <div class="flex flex-col max-w-xl mx-auto">
                    <h1 class="text-4xl md:text-7xl font-bold mb-6 animate-fade-in">
                        Bienvenido !!
                    </h1>
                    <p class="text-xl md:text-2xl mb-8 opacity-90 leading-relaxed">
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
    <section class="py-32 bg-white fade-slide-in">
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
                <!-- Categorías con efecto hover y click -->
                <div class="category-card group cursor-pointer fade-slide-in" onclick="window.location.href='/posts?categoria=1'">
                    <div class="relative overflow-hidden rounded-3xl shadow-lg bg-white hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 flex flex-col h-full">
                        <div class="relative aspect-[4/3]">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Sala" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="text-2xl font-semibold text-stone-800 mb-4 group-hover:text-[#cfbdaa] transition-colors duration-300">Sala</h3>
                            <p class="text-stone-600 leading-relaxed font-light text-sm flex-grow">
                                Espacios que invitan a la convivencia. Ideas frescas para salas modernas y acogedoras.
                            </p>
                            <div class="mt-6 flex items-center text-[#cfbdaa] group-hover:text-stone-800 transition-colors duration-300">
                                <span class="text-sm font-medium">Explorar</span>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform duration-300"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="category-card group cursor-pointer fade-slide-in" onclick="window.location.href='/posts?categoria=2'">
                    <div class="relative overflow-hidden rounded-3xl shadow-lg bg-white hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 flex flex-col h-full">
                        <div class="relative aspect-[4/3]">
                            <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Dormitorio" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="text-2xl font-semibold text-stone-800 mb-4 group-hover:text-[#cfbdaa] transition-colors duration-300">Dormitorio</h3>
                            <p class="text-stone-600 leading-relaxed font-light text-sm flex-grow">
                                Ideas para un descanso reparador. Inspírate en estilos que combinan comodidad y elegancia para tu espacio personal.
                            </p>
                            <div class="mt-6 flex items-center text-[#cfbdaa] group-hover:text-stone-800 transition-colors duration-300">
                                <span class="text-sm font-medium">Explorar</span>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform duration-300"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="category-card group cursor-pointer fade-slide-in" onclick="window.location.href='/posts?categoria=3'">
                    <div class="relative overflow-hidden rounded-3xl shadow-lg bg-white hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 flex flex-col h-full">
                        <div class="relative aspect-[4/3]">
                            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Cocina" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="text-2xl font-semibold text-stone-800 mb-4 group-hover:text-[#cfbdaa] transition-colors duration-300">Cocina</h3>
                            <p class="text-stone-600 leading-relaxed font-light text-sm flex-grow">
                                Diseños funcionales y elegantes para el corazón culinario de tu hogar. Encuentra ideas para todos los estilos.
                            </p>
                            <div class="mt-6 flex items-center text-[#cfbdaa] group-hover:text-stone-800 transition-colors duration-300">
                                <span class="text-sm font-medium">Explorar</span>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform duration-300"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="category-card group cursor-pointer fade-slide-in" onclick="window.location.href='/posts?categoria=4'">
                    <div class="relative overflow-hidden rounded-3xl shadow-lg bg-white hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2 flex flex-col h-full">
                        <div class="relative aspect-[4/3]">
                            <img src="https://images.unsplash.com/photo-1519710164239-da123dc03ef4?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" alt="Baño" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700" />
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                        <div class="p-8 flex flex-col flex-grow">
                            <h3 class="text-2xl font-semibold text-stone-800 mb-4 group-hover:text-[#cfbdaa] transition-colors duration-300">Baño</h3>
                            <p class="text-stone-600 leading-relaxed font-light text-sm flex-grow">
                                Transformaciones elegantes y prácticas para tu baño. Encuentra inspiración para crear tu oasis personal.
                            </p>
                            <div class="mt-6 flex items-center text-[#cfbdaa] group-hover:text-stone-800 transition-colors duration-300">
                                <span class="text-sm font-medium">Explorar</span>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24" class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform duration-300"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Posts Preview Section -->
    <section id="posts" class="py-20 bg-gray-50 fade-slide-in">
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
    <section class="py-32 bg-gradient-to-b from-white to-stone-50 fade-slide-in">
        <div class="max-w-7xl mx-auto px-8 text-center">
            <h2 class="text-6xl font-light text-stone-800 mb-8 tracking-tight">¿Por qué elegirnos?</h2>
            <p class="text-xl text-stone-600 max-w-3xl mx-auto leading-relaxed font-light mb-12">
                Nuestro compromiso es brindarte la mejor inspiración y asesoramiento en diseño interior. Explora nuestras categorías, lee nuestros posts y transforma tu hogar con confianza.
            </p>
            <button class="px-10 py-4 bg-[#cfbdaa] rounded-xl text-white font-medium hover:bg-[#b79d7a] transition-colors hover:shadow-lg hover:-translate-y-2">
                Contáctanos
            </button>
        </div>
    </section>

    <style>
        /* Reset y tipografía base */
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;
            margin: 0;
            background: #f9f9f9;
            color: #3c3c3c;
        }

        /* Animación fade + slide */
        @keyframes fadeSlideIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-slide-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .fade-slide-in.visible {
            opacity: 1;
            transform: translateY(0);
            animation: fadeSlideIn 0.6s ease-out forwards;
        }

        /* Category card styles */
        .category-card {
            transition: all 0.3s ease;
        }

        .category-card:hover {
            transform: translateY(-8px);
        }

        /* Card image hover */
        .category-card img {
            transition: transform 0.7s ease;
        }

        .category-card:hover img {
            transform: scale(1.1);
        }

        /* Button hover lift */
        .hover-lift {
            transition: transform 0.3s ease;
        }

        .hover-lift:hover {
            transform: translateY(-4px);
        }

        /* Section titles */
        h2 {
            font-weight: 300;
            color: #3c3c3c;
            margin-bottom: 1rem;
        }

        /* Container max width and padding */
        .max-w-7xl {
            max-width: 112rem;
            margin-left: auto;
            margin-right: auto;
            padding-left: 2rem;
            padding-right: 2rem;
        }

        /* Grid gaps */
        .grid {
            display: grid;
            gap: 2rem;
        }

        /* Responsive grids */
        @media (min-width: 768px) {
            .md\\:grid-cols-2 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (min-width: 1024px) {
            .lg\\:grid-cols-3 {
                grid-template-columns: repeat(3, 1fr);
            }
            .lg\\:grid-cols-4 {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        /* Text center helper */
        .text-center {
            text-align: center;
        }

        /* Paragraph styles */
        p {
            line-height: 1.6;
            font-weight: 300;
            color: #595959;
        }

        /* Section spacing */
        section {
            padding-top: 8rem;
            padding-bottom: 8rem;
        }

        /* Category card inner */
        .category-card > div {
            background: white;
            border-radius: 1.5rem;
            box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1),
                0 4px 6px -4px rgb(0 0 0 / 0.1);
            overflow: hidden;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            height: 100%;
            transition: all 0.3s ease;
        }

        /* Text section inside card */
        .category-card > div > .p-8 {
            padding: 2rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        /* Category card title */
        .category-card h3 {
            font-size: 1.5rem;
            font-weight: 600;
            color: #3c3c3c;
            margin-bottom: 1rem;
            transition: color 0.3s ease;
        }

        .category-card:hover h3 {
            color: #cfbdaa;
        }

        /* Category card description */
        .category-card p {
            flex-grow: 1;
            font-size: 0.875rem;
            color: #6b6b6b;
            font-weight: 300;
        }

        /* Explore link style */
        .category-card .mt-6 {
            margin-top: 1.5rem;
            display: flex;
            align-items: center;
            color: #cfbdaa;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .category-card:hover .mt-6 {
            color: #3c3c3c;
        }

        /* SVG arrow inside explore */
        .category-card svg {
            width: 1rem;
            height: 1rem;
            margin-left: 0.5rem;
            transition: transform 0.3s ease;
        }

        .category-card:hover svg {
            transform: translateX(0.25rem);
        }

        /* Últimos posts - mantengo estilo original tal cual */

        #posts {
            padding-top: 5rem;
            padding-bottom: 5rem;
            background-color: #f7fafc;
        }

        #posts h2 {
            font-weight: 300;
            font-size: 3rem;
            line-height: 1.1;
            color: #4a5568;
            margin-bottom: 1rem;
        }

        #posts p {
            font-weight: 300;
            font-size: 1.125rem;
            line-height: 1.75rem;
            color: #718096;
            margin-bottom: 4rem;
            max-width: 48rem;
            margin-left: auto;
            margin-right: auto;
        }

        .post-card {
            background: white;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1),
                0 8px 10px -6px rgb(0 0 0 / 0.1);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            transition: box-shadow 0.3s ease;
        }

        .post-card:hover {
            box-shadow: 0 25px 35px -5px rgb(0 0 0 / 0.15),
                0 10px 15px -6px rgb(0 0 0 / 0.1);
        }

        .post-card img {
            width: 100%;
            height: 12rem;
            object-fit: cover;
        }

        .post-card-content {
            padding: 1.5rem 2rem 2rem 2rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .post-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 0.5rem;
        }

        .post-card p {
            font-weight: 300;
            font-size: 1rem;
            line-height: 1.5rem;
            color: #718096;
            flex-grow: 1;
        }

        .post-card a {
            margin-top: 1rem;
            color: #cfbdaa;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s ease;
            align-self: flex-start;
        }

        .post-card a:hover {
            color: #3c3c3c;
            text-decoration: underline;
        }

    </style>
    <script>
        // Detectar elementos con clase fade-slide-in y agregar clase visible al hacer scroll
        function onScrollFadeSlide() {
            const elements = document.querySelectorAll('.fade-slide-in');
            const windowHeight = window.innerHeight;

            elements.forEach(el => {
                const rect = el.getBoundingClientRect();
                // Cuando el elemento esté visible en pantalla (150px antes de llegar)
                if (rect.top < windowHeight - 150) {
                    el.classList.add('visible');
                }
            });
        }

        window.addEventListener('scroll', onScrollFadeSlide);
        window.addEventListener('load', onScrollFadeSlide);
    </script>
@endsection
