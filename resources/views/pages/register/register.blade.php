@extends('layouts.layoutPublic')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-[#f5f1eb] via-[#e7ddd3] to-[#cfbdaa] flex items-center justify-center p-4">
        <!-- Elementos decorativos de fondo -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-16 right-16 w-40 h-40 bg-[#cfbdaa] opacity-15 rounded-full animate-pulse"></div>
            <div class="absolute top-60 left-12 w-28 h-28 bg-[#918477] opacity-20 rounded-full animate-bounce"></div>
            <div class="absolute bottom-24 right-1/4 w-36 h-36 bg-[#e7ddd3] opacity-20 rounded-full animate-ping"></div>
            <div class="absolute bottom-40 left-20 w-20 h-20 bg-[#cfbdaa] opacity-25 rounded-full animate-pulse"></div>
        </div>

        <div class="relative z-10 w-full max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-0 bg-white rounded-3xl shadow-2xl overflow-hidden">
                
                <!-- Panel izquierdo - Formulario -->
                <div class="p-12 flex flex-col justify-center order-2 lg:order-1">
                    <div class="max-w-sm mx-auto w-full">
                        <div class="text-center mb-10">
                            <h1 class="text-3xl font-light text-[#918477] mb-3 tracking-tight">
                                Crear Cuenta
                            </h1>
                            <p class="text-stone-500 font-light">
                                Únete a nuestra comunidad de diseño
                            </p>
                        </div>

                        @if ($errors->has('error'))
                            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                                {{ $errors->first('error') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('register') }}" class="space-y-6">
                            @csrf
                            
                            <div class="space-y-2">
                                <label for="name" class="block text-stone-700 font-medium text-sm">
                                    Nombre completo
                                </label>
                                <div class="relative">
                                    <input type="text" 
                                           id="name" 
                                           name="name" 
                                           value="{{ old('name') }}"
                                           placeholder="Tu nombre completo" 
                                           required
                                           class="w-full px-4 py-4 bg-stone-50 border border-stone-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#cfbdaa] focus:border-transparent transition-all duration-300 text-stone-700 placeholder-stone-400" />
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                        <svg class="w-5 h-5 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="email" class="block text-stone-700 font-medium text-sm">
                                    Correo electrónico
                                </label>
                                <div class="relative">
                                    <input type="email" 
                                           id="email" 
                                           name="email" 
                                           value="{{ old('email') }}"
                                           placeholder="tu@email.com" 
                                           required
                                           class="w-full px-4 py-4 bg-stone-50 border border-stone-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#cfbdaa] focus:border-transparent transition-all duration-300 text-stone-700 placeholder-stone-400" />
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                        <svg class="w-5 h-5 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label for="password" class="block text-stone-700 font-medium text-sm">
                                    Contraseña
                                </label>
                                <div class="relative">
                                    <input type="password" 
                                           id="password" 
                                           name="password" 
                                           placeholder="••••••••" 
                                           required
                                           class="w-full px-4 py-4 bg-stone-50 border border-stone-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-[#cfbdaa] focus:border-transparent transition-all duration-300 text-stone-700 placeholder-stone-400" />
                                    <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                                        <svg class="w-5 h-5 text-stone-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <button type="submit"
                                    class="w-full bg-gradient-to-r from-[#cfbdaa] to-[#918477] hover:from-[#918477] hover:to-[#cfbdaa] text-white font-medium py-4 rounded-xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                                Crear Cuenta
                            </button>
                        </form>

                        <div class="mt-8 text-center">
                            <p class="text-stone-500 text-sm">
                                ¿Ya tienes cuenta? 
                                <a href="{{ route('login') }}" 
                                   class="text-[#cfbdaa] hover:text-[#918477] font-medium transition-colors duration-300 hover:underline">
                                    Inicia sesión aquí
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Panel derecho - Imagen e información -->
                <div class="relative bg-gradient-to-br from-[#918477] to-[#cfbdaa] p-12 flex flex-col justify-center items-center text-white order-1 lg:order-2">
                    <!-- Patrón decorativo de fondo -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-12 right-12 w-12 h-12 border-2 border-white rounded-full"></div>
                        <div class="absolute top-24 left-16 w-8 h-8 border-2 border-white rounded-full"></div>
                        <div class="absolute bottom-20 right-20 w-6 h-6 border-2 border-white rounded-full"></div>
                        <div class="absolute bottom-12 left-12 w-10 h-10 border-2 border-white rounded-full"></div>
                        <!-- Líneas decorativas -->
                        <div class="absolute top-1/3 left-8 w-16 h-0.5 bg-white transform rotate-45"></div>
                        <div class="absolute bottom-1/3 right-8 w-12 h-0.5 bg-white transform -rotate-45"></div>
                    </div>

                    <div class="relative w-full h-full">
                    <!-- Imagen de fondo -->
                    <div class="absolute inset-0 bg-cover bg-center z-0 rounded-xl" style="background-image: url('https://i.pinimg.com/736x/e4/cf/28/e4cf28d18835442a6f0f6341e385ca06.jpg');"></div>

                    <!-- Contenido encima de la imagen -->
                    <div class="relative z-10 text-center text-white p-14 backdrop-blur-sm bg-black/40 rounded-xl">
                        <!-- Logo o ícono -->
                        <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center mb-8 mx-auto backdrop-blur-sm">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>

                        <h2 class="text-4xl font-light mb-6 tracking-tight">
                            Comienza tu viaje
                        </h2>
                        <p class="text-lg opacity-90 font-light leading-relaxed mb-8">
                            Únete a una comunidad de diseñadores y entusiastas del interiorismo. Comparte tus proyectos y descubre inspiración única.
                        </p>

                        <!-- Lista de beneficios -->
                        <div class="text-left space-y-3 mb-8">
                            <div class="flex items-center space-x-3">
                                <div class="w-2 h-2 bg-white rounded-full"></div>
                                <span class="text-sm opacity-90">Acceso a contenido exclusivo</span>
                            </div>
                            <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-white rounded-full"></div>
                            <span class="text-sm opacity-90">Comunidad de diseñadores</span>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-2 h-2 bg-white rounded-full"></div>
                            <span class="text-sm opacity-90">Comparte tus proyectos</span>
                        </div>
                    </div>

                        <!-- Decoración geométrica -->
                        <div class="flex justify-center space-x-2">
                            <div class="w-3 h-3 bg-white/40 rounded-full"></div>
                            <div class="w-3 h-3 bg-white/60 rounded-full"></div>
                            <div class="w-3 h-3 bg-white/80 rounded-full"></div>
                            <div class="w-3 h-3 bg-white rounded-full"></div>
                        </div>
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(5deg); }
        }
        
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        
        input:focus {
            transform: translateY(-1px);
            box-shadow: 0 10px 25px rgba(207, 189, 170, 0.15);
        }
        
        button:hover {
            box-shadow: 0 15px 35px rgba(207, 189, 170, 0.3);
        }
    </style>
@endsection