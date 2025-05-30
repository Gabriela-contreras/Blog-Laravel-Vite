<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
    @include('components.navbar') <!-- Aquí incluyes el navbar -->

    <!-- Contenido Principal -->
    <main class="min-h-screen ">
        @yield('content') <!-- Aquí se inyectará el contenido específico de cada página -->
    </main>

    <!-- Footer -->
    @include('components.footer') <!-- Aquí incluyes el footer -->
</body>

</html>
