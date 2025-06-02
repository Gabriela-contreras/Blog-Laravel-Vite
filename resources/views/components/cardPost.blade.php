<article class="bg-white rounded-2xl shadow-lg overflow-hidden hover-lift">
    <div class="h-48 bg-gradient-to-r from-green-400 to-blue-400">
        <img class="w-full h-full object-cover opacity-80"
            src="{{ $post->image ?? 'https://hips.hearstapps.com/hmg-prod/images/casa-madrid-estilo-tradicional-moderno-salon-vista-general-c2101-r1883734-1606477694.jpg' }}"
            alt="{{ $post->titulo }}">
    </div>
    <div class="p-6">
        <span class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full mb-3">
            {{ $post->categoria ? $post->categoria->nombre : 'Lifestyle' }}
        </span>
        <h3 class="text-xl font-bold text-gray-900 mb-2">{{ $post->titulo }}</h3>
        <p class="text-gray-600 mb-4">
            {{ Str::limit($post->contenido, 150) }}
        </p>
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center space-x-2">
                <div class="w-8 h-8 bg-gradient-to-r from-blue-400 to-green-400 rounded-full flex items-center justify-center">
                    <span class="text-white text-sm font-semibold">
                        {{ $post->usuario ? substr($post->usuario->name, 0, 1) : 'U' }}
                    </span>
                </div>
                <span class="text-sm text-gray-500">
                    {{ $post->usuario ? $post->usuario->name : 'Usuario' }}
                </span>
            </div>
            <div class="text-xs text-gray-400">
                {{ $post->created_at ? $post->created_at->format('d/m/Y') : 'Fecha' }}
            </div>
        </div>
        
        @auth
            @if(auth()->user()->id == $post->usuario_id)
                <div class="flex items-center space-x-2 pt-4 border-t border-gray-100">
                    <a href="{{ route('posts.edit', $post->id) }}" 
                       class="flex-1 bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium py-2 px-3 rounded-md transition-colors text-center">
                        Editar
                    </a>
                    <button onclick="confirmDelete({{ $post->id }})" 
                            class="flex-1 bg-red-500 hover:bg-red-600 text-white text-sm font-medium py-2 px-3 rounded-md transition-colors">
                        Eliminar
                    </button>
                </div>
            @endif
        @endauth
    </div>
</article>