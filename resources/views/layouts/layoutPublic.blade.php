<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#6366f1',
                        secondary: '#8b5cf6',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 min-h-screen">
    <!-- Navbar -->

    <nav class="bg-[#e7ddd3] fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center space-x-2">
                        <div
                            class="w-8 h-8 rounded-lg flex items-center justify-center">
                            <i class="fas fa-blog text-white text-sm"></i>
                        </div>

                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ url('/') }}"
                        class="text-gray-700 hover:text-[#918477] px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        <i class="fas fa-home mr-1"></i> Inicio
                    </a>
                    {{-- <a href="{{ url('/post/post') }}"
                        class="text-gray-700 hover:text-purple-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        <i class="fas fa-list mr-1"></i> Posts
                    </a> --}}
                    <a href="{{ url('register/register') }}"
                        class="  hover:text-[#918477]   px-4 text-gray-700 py-2 rounded-lg text-sm font-medium hover:from-purple-700 hover:to-blue-700 transition-all">
                        <i class="fas fa-plus mr-1"></i> Registar
                    </a>

                    <a href="{{ url('login/login') }}"
                        class=" hover:text-[#918477]   text-white px-4 py-2 rounded-lg text-sm font-medium hover:from-purple-700 hover:to-blue-700 transition-all">
                        Log In
                    </a>
                </div>




    </nav>
    <!-- Contenido Principal -->
    <main class="min-h-screen ">
        @yield('content') <!-- Aquí se inyectará el contenido específico de cada página -->
    </main>

    <!-- Footer -->
    @include('components.footer') <!-- Aquí incluyes el footer -->
</body>

</html>
