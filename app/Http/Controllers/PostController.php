<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Laravel\Prompts\alert;

class PostController extends Controller
{


    public function MostrarPosts()
    {
        // Obtener posts con sus relaciones
        $posts = Post::with(['usuario', 'categoria'])->orderBy('created_at', 'desc')->get();

        // Retornar vista posts/post.blade.php
        return view('pages.post.post', compact('posts'));
    }

public function createPost(Request $request)
{
    // Validar los datos enviados
    $validator = Validator::make($request->all(), [
        'titulo' => 'required|max:255',
        'contenido' => 'required',
        'image' => 'required',
        'category' => 'required|string'
    ]);

    if ($validator->fails()) {
        return response()->json(['errors' => $validator->errors()], 422);
    }

    // Obtener el usuario autenticado
    $usuario = $request->user();
    if (!$usuario) {
        return response()->json(['error' => 'Usuario no autenticado'], 401);
    }

    // Buscar categoría
    $categoriaNombre = $request->input('category');
    $categoria = Category::where('nombre', $categoriaNombre)->first();

    if (!$categoria) {
        $todasCategorias = Category::all(['id', 'nombre']);
        return response()->json([
            'error' => 'Categoría no encontrada',
            'categoria_buscada' => $categoriaNombre,
            'categorias_disponibles' => $todasCategorias
        ], 404);
    }

    // Crear el post
    try {
        $post = Post::create([
            'titulo' => $request->input('titulo'),
            'contenido' => $request->input('contenido'),
            'image' => $request->input('image'),
            'usuario_id' => $usuario->id,
            'categoria_id' => $categoria->id
        ]);

        return redirect()->route('posts.list')->with('success', 'Post creado exitosamente');

    } catch (\Exception $e) {
        return response()->json([
            'error' => 'Error al crear post',
            'message' => $e->getMessage()
        ], 500);
    }
}
    // Actualiza post
    public function updatePost(Request $request, $id)
    {
        // Buscar el post o devolver un error 404 si no existe
        $post = Post::findOrFail($id);

        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'titulo' => 'sometimes|required|max:255',
            'contenido' => 'sometimes|required',
            'image' => 'required',
        ]);

        // Verificar si la validación falla
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Actualizar el post con los datos validados
        $post->update($validator->validated());

        // Retornar el post actualizado
        return response()->json([
            'message' => 'Post actualizado correctamente',
            'data' => $post
        ], 200);
    }

    // Eliminar un post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return response()->json(['message' => 'Post deleted']);
    }

    // Buscar un post específico
    public function FindPost($id)
    {
        $post = Post::with(['usuario', 'categoria'])->findOrFail($id);
        return response()->json($post);
    }
}
