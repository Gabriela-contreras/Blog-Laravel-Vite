<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{


    public function MostrarPosts()
    {
        // Obtener posts con sus relaciones
        $posts = Post::with(['usuario', 'categoria'])->orderBy('created_at', 'desc')->get();

        // Retornar vista posts/post.blade.php
        return view('pages.post.post', compact('posts'));
    }



    // Para crear un post
    public function store(Request $request)
    {
        // Validar los datos manualmente usando Validator
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|max:255',
            'contenido' => 'required',
            'categoria_id' => 'required|integer',
            'usuario_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Crear un nuevo registro en la tabla 'posts'
        $post = Post::create($validator->validated());

        // Devolver el post creado en formato JSON con el código 201
        return response()->json($post, 201);
    }

    // Actualiza post
    public function update(Request $request, $id)
    {
        // Buscar el post o devolver un error 404 si no existe
        $post = Post::findOrFail($id);

        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'titulo' => 'sometimes|required|max:255',
            'contenido' => 'sometimes|required',
            'categoria_id' => 'sometimes|required|integer',
            'usuario_id' => 'sometimes|required|integer',
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
