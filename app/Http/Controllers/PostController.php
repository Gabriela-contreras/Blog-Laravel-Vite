<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
            'image' => 'required|url',
            'category' => 'required|string'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Obtener el usuario autenticado
        $usuario = $request->user();
        if (!$usuario) {
            return back()->withErrors(['error' => 'Usuario no autenticado'])->withInput();
        }

        // Buscar categoría
        $categoriaNombre = $request->input('category');
        $categoria = Category::where('nombre', $categoriaNombre)->first();

        if (!$categoria) {
            return back()->withErrors(['category' => 'Categoría no encontrada'])->withInput();
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
            return back()->withErrors(['error' => 'Error al crear post: ' . $e->getMessage()])->withInput();
        }
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $post = Post::with(['categoria', 'usuario'])->findOrFail($id);
        
        // Verificar que el usuario actual es el propietario del post
        if (Auth::id() !== $post->usuario_id) {
            return redirect()->route('posts.list')->with('error', 'No tienes permiso para editar este post.');
        }

        return view('pages.post.editPost', compact('post'));
    }

    // Actualizar post
    public function updatePost(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        
        // Verificar que el usuario actual es el propietario del post
        if (Auth::id() !== $post->usuario_id) {
            return redirect()->route('posts.list')->with('error', 'No tienes permiso para editar este post.');
        }

        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|max:255',
            'contenido' => 'required',
            'image' => 'required|url',
            'category' => 'required|string'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Buscar categoría
        $categoriaNombre = $request->input('category');
        $categoria = Category::where('nombre', $categoriaNombre)->first();

        if (!$categoria) {
            return back()->withErrors(['category' => 'Categoría no encontrada'])->withInput();
        }

        try {
            // Actualizar el post
            $post->update([
                'titulo' => $request->input('titulo'),
                'contenido' => $request->input('contenido'),
                'image' => $request->input('image'),
                'categoria_id' => $categoria->id
            ]);

            return redirect()->route('posts.list')->with('success', 'Post actualizado correctamente');

        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Error al actualizar post: ' . $e->getMessage()])->withInput();
        }
    }

    // Eliminar un post
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        
        // Verificar que el usuario actual es el propietario del post
        if (Auth::id() !== $post->usuario_id) {
            return redirect()->route('posts.list')->with('error', 'No tienes permiso para eliminar este post.');
        }

        try {
            $post->delete();
            return redirect()->route('posts.list')->with('success', 'Post eliminado correctamente');
        } catch (\Exception $e) {
            return redirect()->route('posts.list')->with('error', 'Error al eliminar el post');
        }
    }

    // Buscar un post específico
    public function FindPost($id)
    {
        $post = Post::with(['usuario', 'categoria'])->findOrFail($id);
        return response()->json($post);
    }
}