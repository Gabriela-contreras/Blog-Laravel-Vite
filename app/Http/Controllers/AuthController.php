<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    // Mostrar formulario de login
    public function showLoginForm()
    {
        return view('pages.login.login');
    }

    // Mostrar formulario de registro
    public function showRegisterForm()
    {
        return view('pages.register.register');
    }

    // Registro de usuario
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Autenticar automáticamente después del registro
        Auth::login($user);

        // Limpiar cualquier URL intended y redirigir siempre al home
        $request->session()->forget('url.intended');
        return redirect()->route('home')->with('success', 'Registro exitoso. Bienvenido!');
    }

    // Inicio de sesión
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            
            // Limpiar cualquier URL intended para forzar redirección al home
            $request->session()->forget('url.intended');
            
            // Siempre redirigir al home después del login
            return redirect()->route('home')->with('success', '¡Bienvenido de vuelta!');
        }

        return back()->withErrors([
            'error' => 'Las credenciales no coinciden con nuestros registros.',
        ])->withInput($request->except('password'));
    }

    // Cierre de sesión
    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('login')->with('success', 'Has cerrado sesión correctamente.');
    }
}