<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

use function Laravel\Prompts\alert;

class AuthController extends Controller
{

    // Mostrar formulario de registro
    public function showRegisterForm()
    {
        return view('auth.register');
    }


    // Registro de usuario
    public function register(Request $request)
    {
        Log::info("entra");
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login/login')->with('success', 'Registro exitoso. Por favor inicia sesión.');
    }

    // Inicio de sesión
    public function login(Request $request)
    {
        print_r('login');
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('pages/home/home'); // Redirige página principal
        } else {
            return alert('No estas registrado! Registrate') . redirect()->intended('/'); //redirige a welcome
        }


        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    // Cierre de sesión
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // Redirige a la página de inicio
    }
}
