@extends('layouts.layoutPublic')


@section('title', 'Inicio - Mi Blog Personal')

@section('content')
    <!-- Hero Section -->
    <section class="bg-[#cfbdaa] min-h-screen flex items-center justify-center relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>

        <!-- Animated background elements -->
        <div class="absolute top-10 left-10 w-20 h-20 bg-white  rounded-full animate-pulse"></div>
        <div class="absolute top-32 right-20 w-16 h-16 bg-white  rounded-full animate-bounce"></div>
        <div class="absolute bottom-20 left-1/4 w-12 h-12 bg-white  rounded-full animate-ping"></div>

        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 animate-fade-in">
                Welcome
            </h1>
            <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto opacity-90">
                Un espacio donde las ideas cobran vida. Descubre historias inspiradoras,
                consejos útiles y perspectivas únicas sobre los temas que más te interesan.
            </p>
            {{-- <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#posts"
                    class="bg-white text-purple-600 px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transition-all hover-lift">
                    <i class="fas fa-book-open mr-2"></i>
                    Explorar Posts
                </a>

            </div> --}}
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white animate-bounce">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </section>

    {{-- ejemplo de post --}}
    <section id="post" class="flex flex-col mt-10 mb-6 items-center ">
        <h2 class="text-3xl font-bold text-[#cfbdaa] mb-10 mt-4" >
            Ejemplo de nuestros posts!
        </h2>

        <div class="flex flex-row justify-around">

            <article class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift w-[40%]">
                <div class="h-48 bg-gradient-to-r from-green-400 to-blue-400">
                    <img class="w-full h-full object-cover opacity-80"
                        src="https://hips.hearstapps.com/hmg-prod/images/casa-madrid-estilo-tradicional-moderno-salon-sofa-azul-1611672188.jpg?crop=0.754xw:0.846xh;0.127xw,0.154xh&resize=768:*"
                        alt="Living">
                </div>
                <div class="p-6">
                    <span class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full mb-3">
                        Living
                    </span>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Living Moderno</h3>
                    <p class="text-gray-600 mb-4">
                        Diseño para Living
                        🛋️ Un living que invita a quedarse
                        El corazón de tu casa, donde cada rincón cuenta una historia. Creamos espacios cálidos, con diseños
                        modernos
                        y muebles que combinan confort y estilo.

                        📲 Hablemos: +54 9 11 1234 5678. ¡Dale vida a tu living!
                    </p>
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center space-x-2">
                            <div
                                class="w-8 h-8 bg-gradient-to-r from-blue-400 to-green-400 rounded-full flex items-center justify-center">
                                <span class="text-white text-sm font-semibold">
                                    Susana
                                </span>
                            </div>
                            <span class="text-sm text-gray-500">
                                Susana
                            </span>
                        </div>
                        <div class="text-xs text-gray-400">
                            03/06/2025
                        </div>
                    </div>

                </div>
            </article>
            <div class="lg:w-1/2  p-8 flex flex-col items-center justify-center text-center">
                <h3 class="text-4xl font-bold text-[#cfbdaa] mb-4">Únete a nuestra comunidad 💫</h3>
                <p class="text-gray-600 mb-6 font-semibold text-xl">
                    Descubre ideas exclusivas para transformar tu hogar. Accede a contenido único, inspírate y dale vida a
                    tus espacios. Regístrate y sé parte de este viaje creativo.
                </p>
                <a href="register/register"
                    class="bg-[#e7ddd3] text-white  px-8 py-4 rounded-full font-semibold text-lg hover:bg-[#918477] transition-all hover-lift">
                    Registrarse
                </a>
            </div>
        </div>
    </section>
    {{-- nuestro enfoque --> --}}
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
                    <div
                        class="w-28 h-28 bg-[#e7ddd3] rounded-full flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-transform duration-500 shadow-lg">
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
                    <div
                        class="w-28 h-28 bg-[#cfbdaa]  rounded-full flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-transform duration-500 shadow-lg">
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
                    <div
                        class="w-28 h-28 bg-[#918477] rounded-full flex items-center justify-center mx-auto mb-8 group-hover:scale-110 transition-transform duration-500 shadow-lg">
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

        .animate-fade-in {
            animation: fade-in 1s ease-out;
        }
    </style>
@endsection
