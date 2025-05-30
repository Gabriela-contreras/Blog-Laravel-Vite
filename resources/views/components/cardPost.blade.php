

<article class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift">
    <div class="h-48 bg-gradient-to-r from-green-400 to-blue-400">
        <img class=""
            src="https://hips.hearstapps.com/hmg-prod/images/casa-madrid-estilo-tradicional-moderno-salon-vista-general-c2101-r1883734-1606477694.jpg"
            alt="">
    </div>
    <div class="p-6">
        <span class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full mb-3">
            Lifestyle
        </span>
        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $post->titulo }}</h3>
        <p class="text-gray-600 mb-4">
            {{ $post->contenido }}
        </p>
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                <span class="text-sm text-gray-500">{{ $post->usuario }}</span>
            </div>
        </div>
    </div>
</article>
