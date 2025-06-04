<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Mostrar la página de inicio con los últimos posts
     */
    public function getHome()
    {
        // Obtener los posts más recientes para la página principal
        // $latestPosts = Post::with('category')
        //     ->published()
        //     ->latest()
        //     ->take(6)
        //     ->get();

        // // Obtener las categorías más populares
        // $popularCategories = Category::withCount('posts')
        //     ->orderBy('posts_count', 'desc')
        //     ->take(8)
        //     ->get();

        // Posts destacados
        // $featuredPosts = Post::with('category')
        //     ->where('featured', true)
        //     ->published()
        //     ->latest()
        //     ->take(3)
        //     ->get();
        // Obtener los últimos 3 posts publicados con sus relaciones
        $latestPosts = Post::with(['usuario', 'categoria'])
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();

        // Retornar vista home con los posts
        return view('pages.home.home', compact('latestPosts'));


        // return view('pages.home.home');
    }

    /**
     * Scope a query to only include published posts.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    // public function scopePublished($query)
    // {
    //     return $query->where('status', 'published');
    // }
    /**
     * Display search results.
     */
    public function search(Request $request)
    {
        $query = $request->get('q');

        $posts = Post::with('category')
            ->where('title', 'LIKE', "%{$query}%")
            ->orWhere('content', 'LIKE', "%{$query}%")
            ->orWhere('tags', 'LIKE', "%{$query}%")
            ->published()
            ->latest()
            ->paginate(12);

        return view('search.results', compact('posts', 'query'));
    }

    /**
     * Display posts by category.
     */
    public function postsByCategory($categorySlug)
    {
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        $posts = Post::with('category')
            ->where('category_id', $category->id)
            ->published()
            ->latest()
            ->paginate(12);

        return view('categories.posts', compact('category', 'posts'));
    }
}
