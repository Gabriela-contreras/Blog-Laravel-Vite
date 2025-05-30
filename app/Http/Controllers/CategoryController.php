<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Mostrar una lista de categorías.
     * Ruta: /categorias
     */
    public function index()
    {
        $categorias = Category::all();

        return view('categorias.index', compact('categorias'));
    }

    /**
     * Mostrar el formulario para crear una nueva categoría.
     * Ruta: /categorias/crear
     */
    public function create()
    {
        return view('categorias.create');
    }

    /**
     * Mostrar una categoría específica.
     * Ruta: /categorias/{id}
     */
    public function show($id)
    {
        $categoria = Category::findOrFail($id);

        return view('categorias.show', compact('categoria'));
    }

    /**
     * Mostrar el formulario para editar una categoría.
     * Ruta: /categorias/{id}/editar
     */
    public function edit($id)
    {
        $categoria = Category::findOrFail($id);

        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Guardar una nueva categoría en la base de datos.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        Category::create($validated);

        return redirect()->route('categorias.index')
            ->with('success', 'Categoría creada exitosamente.');
    }

    /**
     * Actualizar una categoría existente en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $categoria = Category::findOrFail($id);

        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
        ]);

        $categoria->update($validated);

        return redirect()->route('categorias.index')
            ->with('success', 'Categoría actualizada exitosamente.');
    }

    /**
     * Eliminar una categoría de la base de datos.
     */
    public function destroy($id)
    {
        $categoria = Category::findOrFail($id);
        $categoria->delete();

        return redirect()->route('categorias.index')
            ->with('success', 'Categoría eliminada exitosamente.');
    }
}
