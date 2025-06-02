@extends('layouts.app')

@section('title', 'Posts - Mi Blog Personal')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold text-gray-900 mb-8">Todos los Posts</h1>

        @if($posts && $posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($posts as $post)
                    @include('components.cardPost', ['post' => $post])
                @endforeach
            </div>
        @else
            <div class="text-center py-12">
                <div class="bg-gray-100 rounded-lg p-8">
                    <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253z" />
                    </svg>
                    <h3 class="text-lg font-medium text-gray-900 mb-2">No hay posts disponibles</h3>
                    <p class="text-gray-500">Aún no se han creado posts.</p>
                </div>
            </div>
        @endif
    </div>

    <!-- Modal de confirmación para eliminar -->
    <div id="deleteModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden items-center justify-center z-50">
        <div class="bg-white rounded-lg p-6 max-w-sm mx-4">
            <h3 class="text-lg font-medium text-gray-900 mb-4">¿Confirmar eliminación?</h3>
            <p class="text-sm text-gray-500 mb-6">Esta acción no se puede deshacer. ¿Estás seguro de que quieres eliminar este post?</p>
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

    <style>
        .hover-lift:hover {
            transform: translateY(-4px);
        }
    </style>

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
@endsection