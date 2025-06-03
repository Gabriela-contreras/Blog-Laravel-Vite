@extends('layouts.app')

@section('title', $post->titulo . ' - Mi Blog Personal')

@section('content')
    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Botón de volver -->
            <div class="mb-6">
                @auth
                    <a href="{{ route('posts.list') }}"
                        class="inline-flex items-center px-4 py-2 bg-[#cfbdaa] hover:bg-gray-600 text-white text-sm font-medium rounded-md transition-colors">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Volver a Posts
                    </a>
                @else
                    <a href="{{ url('/') }}"
                        class="inline-flex items-center px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white text-sm font-medium rounded-md transition-colors">
                        <i class="fas fa-arrow-left mr-2"></i>
                        Volver al Inicio
                    </a>
                @endauth
            </div>

            <!-- Artículo principal -->
            <article class="bg-white rounded-2xl shadow-lg overflow-hidden">

                <!-- Imagen destacada -->
                <div class="h-64 md:h-80 bg-gradient-to-r from-green-400 to-blue-400">
                    <img class="w-full h-full object-cover opacity-90"
                        src="{{ $post->image ?? 'https://hips.hearstapps.com/hmg-prod/images/casa-madrid-estilo-tradicional-moderno-salon-vista-general-c2101-r1883734-1606477694.jpg' }}"
                        alt="{{ $post->titulo }}">
                </div>

                <!-- Contenido del post -->
                <div class="p-6 md:p-8">

                    <!-- Categoría -->
                    <div class="mb-4">
                        <span class="inline-block bg-green-100 text-green-800 text-sm px-3 py-1 rounded-full">
                            {{ $post->categoria ? $post->categoria->nombre : 'Lifestyle' }}
                        </span>
                    </div>

                    <!-- Título -->
                    <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        {{ $post->titulo }}
                    </h1>

                    <!-- Información del autor y fecha -->
                    <div class="flex items-center justify-between mb-8 pb-6 border-b border-gray-200">
                        <div class="flex items-center space-x-3">
                            <div
                                class="w-12 h-12 bg-gradient-to-r from-blue-400 to-green-400 rounded-full flex items-center justify-center">
                                <span class="text-white text-lg font-semibold">
                                    {{ $post->usuario ? substr($post->usuario->name, 0, 1) : 'U' }}
                                </span>
                            </div>
                            <div>
                                <p class="text-lg font-medium text-gray-900">
                                    {{ $post->usuario ? $post->usuario->name : 'Usuario' }}
                                </p>
                                <p class="text-sm text-gray-500">
                                    Publicado el {{ $post->created_at ? $post->created_at->format('d/m/Y') : 'Fecha' }}
                                </p>
                            </div>
                        </div>

                        @auth
                            @if (auth()->user()->id == $post->usuario_id)
                                <div class="flex space-x-2">
                                    <a href="{{ route('posts.edit', $post->id) }}"
                                        class="bg-blue-500 hover:bg-blue-600 text-white text-sm font-medium py-2 px-4 rounded-md transition-colors">
                                        <i class="fas fa-edit mr-1"></i>
                                        Editar
                                    </a>
                                    <button onclick="confirmDelete({{ $post->id }})"
                                        class="bg-red-500 hover:bg-red-600 text-white text-sm font-medium py-2 px-4 rounded-md transition-colors">
                                        <i class="fas fa-trash mr-1"></i>
                                        Eliminar
                                    </button>
                                </div>
                            @endif
                        @endauth
                    </div>

                    <!-- Contenido del post -->
                    <div class="prose prose-lg max-w-none">
                        <div class="text-gray-700 leading-relaxed text-lg whitespace-pre-line">
                            {{ $post->contenido }}
                        </div>
                    </div>
                </div>
            </article>

            <!-- Posts relacionados -->
            @if ($relatedPosts && $relatedPosts->count() > 0)
                <div class="mt-12">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8">Posts Relacionados</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        @foreach ($relatedPosts as $relatedPost)
                            @auth
                                @include('components.cardPost', ['post' => $relatedPost])
                            @else
                                @include('components.cardPostGuest', ['post' => $relatedPost])
                            @endauth
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </div>

    @auth
        @if (auth()->user()->id == $post->usuario_id)
            <!-- Modal de confirmación para eliminar -->
            <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
                <div class="bg-white rounded-lg p-6 max-w-sm mx-4">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">¿Confirmar eliminación?</h3>
                    <p class="text-sm text-gray-500 mb-6">Esta acción no se puede deshacer. ¿Estás seguro de que quieres
                        eliminar este post?</p>
                    <div class="flex space-x-3">
                        <button onclick="closeDeleteModal()"
                            class="flex-1 bg-gray-300 hover:bg-gray-400 text-gray-700 font-medium py-2 px-4 rounded">
                            Cancelar
                        </button>
                        <button onclick="deletePost()"
                            class="flex-1 bg-red-500 hover:bg-red-600 text-white font-medium py-2 px-4 rounded">
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>

            <!-- Formulario oculto para eliminar -->
            <form id="deleteForm" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>

            <script>
                let postToDelete = null;

                function confirmDelete(postId) {
                    postToDelete = postId;
                    document.getElementById('deleteModal').classList.remove('hidden');
                    document.getElementById('deleteModal').classList.add('flex');
                }

                function closeDeleteModal() {
                    document.getElementById('deleteModal').classList.add('hidden');
                    document.getElementById('deleteModal').classList.remove('flex');
                    postToDelete = null;
                }

                function deletePost() {
                    if (postToDelete) {
                        const form = document.getElementById('deleteForm');
                        form.action = `/posts/${postToDelete}`;
                        form.submit();
                    }
                }

                // Cerrar modal al hacer clic fuera de él
                document.getElementById('deleteModal').addEventListener('click', function(e) {
                    if (e.target === this) {
                        closeDeleteModal();
                    }
                });
            </script>
        @endif
    @endauth
@endsection
