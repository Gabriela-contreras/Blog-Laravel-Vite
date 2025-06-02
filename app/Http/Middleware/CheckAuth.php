<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Si el usuario no está autenticado
        if (!Auth::check()) {
            // Si es una petición AJAX, devolver JSON
            if ($request->expectsJson()) {
                return response()->json(['message' => 'No autenticado'], 401);
            }
            
            // Redirigir al login con un mensaje
            return redirect()->route('login')->with('error', 'Debes iniciar sesión para acceder a esta página.');
        }

        return $next($request);
    }
}