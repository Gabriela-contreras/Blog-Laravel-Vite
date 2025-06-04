@extends('layouts.layoutPublic')

@section('content')
    <div class="min-h-screen bg-gradient-to-br from-[#f5f1eb] via-[#e7ddd3] to-[#cfbdaa] flex items-center justify-center p-4">
        <!-- Elementos decorativos de fondo -->
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute top-20 left-10 w-32 h-32 bg-[#cfbdaa] opacity-20 rounded-full animate-pulse"></div>
            <div class="absolute top-40 right-20 w-24 h-24 bg-[#918477] opacity-15 rounded-full animate-bounce"></div>
            <div class="absolute bottom-32 left-1/4 w-20 h-20 bg-[#e7ddd3] opacity-25 rounded-full animate-ping"></div>
            <div class="absolute bottom-20 right-1/3 w-16 h-16 bg-[#cfbdaa] opacity-20 rounded-full animate-pulse"></div>
        </div>

        <div class="relative z-10 w-full max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-0 bg-white rounded-3xl shadow-2xl overflow-hidden">
                
                <!-- Panel izquierdo - Imagen e información -->
                <div class="relative bg-gradient-to-br from-[#cfbdaa] to-[#918477] p-12 flex flex-col justify-center items-center text-white">
                    <!-- Patrón decorativo de fondo -->
                    <div class="absolute inset-0 opacity-10">
                        <div class="absolute top-8 left-8 w-8 h-8 border-2 border-white rounded-full"></div>
                        <div class="absolute top-20 right-12 w-6 h-6 border-2 border-white rounded-full"></div>
                        <div class="absolute bottom-16 left-16 w-4 h-4 border-2 border-white rounded-full"></div>
                        <div class="absolute bottom-8 right-8 w-10 h-10 border-2 border-white rounded-full"></div>
                    </div>

                    <div class="relative w-full h-full">
                        <!-- Imagen de fondo -->
                        <div class="absolute inset-0 rounded-xl bg-cover bg-center z-0" style="background-image: url('https://i.pinimg.com/736x/e4/cf/28/e4cf28d18835442a6f0f6341e385ca06.jpg');"></div>

                        <!-- Contenido encima de la imagen -->
                        <div class="relative z-10 text-center text-white py-20 px-14 backdrop-blur-sm bg-black/40 rounded-xl">
                            <!-- Logo o ícono -->
                            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mb-8 mx-auto backdrop-blur-sm">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253z" />
                            </svg>
                            </div>

                            <h2 class="text-4xl font-light mb-6 tracking-tight">
                            Bienvenido de vuelta
                            </h2>
                            <p class="text-lg opacity-90 font-light leading-relaxed mb-8">
                            Accede a tu espacio personal de inspiración y diseño. Descubre nuevas ideas y comparte tu creatividad.
                            </p>

                            <!-- Decoración geométrica -->
                            <div class="flex justify-center space-x-2">
                            <div class="w-2 h-2 bg-white/40 rounded-full"></div>
                            <div class="w-2 h-2 bg-white/60 rounded-full"></div>
                            <div class="w-2 h-2 bg-white/80 rounded-full"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Panel derecho - Formulario -->
                <div class="p-12 flex flex-col justify-center">
                    <div class="max-w-sm mx-auto w-full">
                        <div class="text-center mb-10">
                            <h1 class="text-3xl font-light text-[#918477] mb-3 tracking-tight">
                                Iniciar Sesión
                            </h1>
                            <p class="text-stone-500 font-light">
                                Ingresa tus credenciales para continuar
                            </p>
                        </div>

                        @if ($errors->has('error'))
                            <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-xl mb-6 text-sm">
                                {{ $errors->first('error') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login.post') }}" class="space-y-6">
                            @csrf
                            
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
                                    class="w-full bg-[#cfbdaa] hover:bg-[#8a7d70] text-white font-medium py-4 rounded-xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                                Iniciar Sesión
                            </button>
                        </form>

                        <div class="mt-8 text-center">
                            <p class="text-stone-500 text-sm">
                                ¿No tienes cuenta? 
                                <a href="{{ route('register.form') }}" 
                                   class="text-[#cfbdaa] hover:text-[#918477] font-medium transition-colors duration-300 hover:underline">
                                    Regístrate aquí
                                </a>
                            </p>
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