<?php
session_start();


$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'] ?? '';
    $password = $_POST['password'] ?? '';

    // de prueba luego lo hacemos dinamico
    if ($usuario === 'gaby' && $password === '123123') {
        $_SESSION['usuario'] = $usuario;
        header('Location: dashboard.php'); // Redirige al dashboard o página principal
        exit();
    } else {
        $error = 'Usuario o contraseña incorrectos';
    }
}
?>
@extends('layouts.app')
<div class="flex flex-row justify-center align-middle items-center w-full mt-30">
    <section class="border rounded-4xl  h-auto ">
        <img class="cover bg-cover h-[500px]"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQXKXLiXUNWaEMzZo_2uH4GxSwabNFfmidXA&s"
            alt="">
    </section>

    <section class="h-auto w-[400px]">
        <div class="bg-[#ffe1d2] p-8 rounded-xl shadow-lg max-w-md w-full h-[500px] flex flex-col justify-around">
            <h1 class="text-2xl font-bold mb-6 text-gray-800 text-center">Registrarse</h1>

            <?php if($error): ?>
            <div class="bg-red-100 text-red-700 px-4 py-3 rounded mb-4">
                <?= htmlspecialchars($error) ?>
            </div>
            <?php endif; ?>

            <form method="POST" action="" class="space-y-6">
                <div>
                    <label for="usuario" class="block text-gray-700 font-medium mb-2">Usuario</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu usuario" required
                        class=" bg-white w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>
                <div>
                    <label for="usuario" class="block text-gray-700 font-medium mb-2">Mail</label>
                    <input type="text" id="usuario" name="usuario" placeholder="Ingresa tu Mail" required
                        class=" bg-white w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>
                <div>
                    <label for="password" class="block text-gray-700 font-medium mb-2">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required
                        class=" bg-white w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-400" />
                </div>

                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded transition-colors">
                    Registar
                </button>
            </form>

        </div>
    </section>

</div>
