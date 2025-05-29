<?php

// namespace App\Http\Controllers;

// use App\Models\Category;
// use Illuminate\Http\Request;

// class CategoryController extends Controller
// {
//     /**
//      * Display a listing of categories.
//      * Ruta: /category
//      */
//     public function getIndex()
//     {
//         $categories = Category::all();
        
//         return view('categories.index', compact('categories'));
//     }

//     /**
//      * Show the form for creating a new category.
//      * Ruta: /category/create
//      */
//     public function getCreate()
//     {
//         return view('categories.create');
//     }

//     /**
//      * Display the specified category.
//      * Ruta: /category/show/{id}
//      */
//     public function getShow($id)
//     {
//         $category = Category::findOrFail($id);
        
//         return view('categories.show', compact('category'));
//     }

//     /**
//      * Show the form for editing the specified category.
//      * Ruta: /category/edit/{id}
//      */
//     public function getEdit($id)
//     {
//         $category = Category::findOrFail($id);
        
//         return view('categories.edit', compact('category'));
//     }

//     /**
//      * Store a newly created category in storage.
//      */
//     public function store(Request $request)
//     {
//         $validated = $request->validate([
//             'name' => 'required|string|max:255',
//             'description' => 'nullable|string',
//             'slug' => 'required|string|unique:categories,slug'
//         ]);

//         Category::create($validated);

//         return redirect()->route('categories.index')
//                         ->with('success', 'Categoría creada exitosamente.');
//     }

//     /**
//      * Update the specified category in storage.
//      */
//     public function update(Request $request, $id)
//     {
//         $category = Category::findOrFail($id);

//         $validated = $request->validate([
//             'name' => 'required|string|max:255',
//             'description' => 'nullable|string',
//             'slug' => 'required|string|unique:categories,slug,' . $id
//         ]);

//         $category->update($validated);

//         return redirect()->route('categories.index')
//                         ->with('success', 'Categoría actualizada exitosamente.');
//     }

//     /**
//      * Remove the specified category from storage.
//      */
//     public function destroy($id)
//     {
//         $category = Category::findOrFail($id);
//         $category->delete();

//         return redirect()->route('categories.index')
//                         ->with('success', 'Categoría eliminada exitosamente.');
//     }
// }