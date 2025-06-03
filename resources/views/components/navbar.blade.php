<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#e7ddd3',
                        secondary: '#cfbdaa',
                    }
                }
            }
        }
    </script>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Navigation -->
    <nav class="bg-[#e7ddd3] fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="{{ url('/') }}" class="flex items-center space-x-2">
                        <div
                            class="w-8 h-8  rounded-lg flex items-center justify-center">
                            <i class="fas fa-blog text-white text-sm"></i>
                        </div>

                    </a>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ url('pages/home/home') }}"
                        class="text-gray-700 hover:text-[#918477] px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        <i class="fas fa-home mr-1"></i> Inicio
                    </a>
                    <a href="{{ url('/post/post') }}"
                        class="text-gray-700 hover:text-[#918477] px-3 py-2 rounded-md text-sm font-medium transition-colors">
                        <i class="fas fa-list mr-1"></i> Posts
                    </a>
                    <a href="{{ url('/post/create') }}"
                        class="  hover:text-[#918477]  px-4 text-gray-700 py-2 rounded-lg text-sm font-medium hover:from-purple-700 hover:to-blue-700 transition-all">
                        <i class="fas fa-plus mr-1"></i> Nuevo Post
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                                class="bg-[#cfbdaa] hover:bg-[#918477] text-white px-4 py-2 rounded transition-colors"
                                onclick="return confirm('¿Estás seguro de que quieres cerrar sesión?')">
                            Cerrar Sesión
                        </button>
                    </form>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="text-gray-700 hover:text-purple-600 focus:outline-none" onclick="toggleMobileMenu()">
                        <i class="fas fa-bars text-lg"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="{{ url('pages/home/home') }}"
                    class="text-gray-700 hover:text-purple-600 block px-3 py-2 text-base font-medium">
                    <i class="fas fa-home mr-2"></i> Inicio
                </a>
                <a href="{{ url('/category') }}"
                    class="text-gray-700 hover:text-purple-600 block px-3 py-2 text-base font-medium">
                    <i class="fas fa-list mr-2"></i> Posts
                </a>
                <a href="{{ url('/category/create') }}"
                    class="text-gray-700 hover:text-purple-600 block px-3 py-2 text-base font-medium">
                    <i class="fas fa-plus mr-2"></i> Nuevo Post
                </a>
            </div>
        </div>
    </nav>
</body>

</html>
