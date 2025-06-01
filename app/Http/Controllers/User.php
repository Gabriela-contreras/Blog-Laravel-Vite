<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{


    // public function MostrarUsuario()
    // {
    //     // Obtener Users con sus relaciones
    //     $user = User::with(['usuario', 'categoria'])->orderBy('created_at', 'desc')->get();

    //     // Retornar vista Users/User.blade.php
    //     return view('pages.User.User', compact('Users'));
    // }



    // Para crear un user
    public function createUser(Request $request)
    {
        // Validar los datos manualmente usando Validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required',
            'password' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Crear un nuevo registro en la tabla 'Users'
        $user = User::create($validator->validated());

        // Devolver el User creado en formato JSON con el código 201
        return response()->json($user, 201);
    }

    // Actualiza User
    public function update(Request $request, $id)
    {
        // Buscar el User o devolver un error 404 si no existe
        $user = User::findOrFail($id);

        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|max:255',
            'email' => 'sometimes|required',
            'password' => 'sometimes|required|integer',

        ]);

        // Verificar si la validación falla
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        // Actualizar el User con los datos validados
        $user->update($validator->validated());

        // Retornar el User actualizado
        return response()->json([
            'message' => 'User actualizado correctamente',
            'data' => $user
        ], 200);
    }

    // Eliminar un User
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User deleted']);
    }

    // Buscar un User específico
    public function FindUser($id)
    {
        $user = User::findOrFail($id);
        return response()->json($user);
    }
}
