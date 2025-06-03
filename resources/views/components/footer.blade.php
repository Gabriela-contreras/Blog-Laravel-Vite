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
                        primary: '#6366f1',
                        secondary: '#8b5cf6',
                    }
                }
            }
        }
    </script>
    @vite('resources/css/app.css')

</head>

<body>
    <footer class="bg-[#918477] text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div>
                    <h3 class="text-lg font-semibold mb-4">Transformamos ideas en realidades</h3>
                    <ul class="space-y-2 text-white">
                        <li> Nuestro equipo está dedicado a convertir tus sueños y necesidades en ambientes funcionales, hermosos
                            y llenos de personalidad.</li>

                    </ul>
                </div>
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div
                            class="w-8 h-8 bg-gradient-to-r from-purple-600 to-blue-600 rounded-lg flex items-center justify-center">
                            <i class="fas fa-blog text-white text-sm"></i>
                        </div>
                        <span class="text-xl font-bold">Blog</span>
                    </div>
                    <p class="text-white">Un espacio para compartir ideas, experiencias y conocimientos.</p>
                </div>


                <div>
                    <h3 class="text-lg font-semibold mb-4">Síguenos</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-white hover:text-white transition-colors">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-white hover:text-white transition-colors">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-white hover:text-white transition-colors">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-white hover:text-white transition-colors">
                            <i class="fab fa-linkedin text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-[#e7ddd3] mt-8 pt-8 text-center text-white">
                <p>&copy; 2025 Mi Blog. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>
</body>

</html>
