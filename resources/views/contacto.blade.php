<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
       @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Contenedor -->
    <div class="w-full max-w-lg bg-white p-8 rounded-2xl shadow-md">
        <h1 class="text-3xl font-bold text-blue-600 text-center mb-6">Formulario de Contacto</h1>

        <!-- Formulario -->
        <form action="" method="POST" class="space-y-5">
            @csrf <!-- Protección CSRF de Laravel -->

            <!-- Nombre -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre</label>
                <input type="text" name="nombre" id="nombre" 
                       class="mt-1 w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300 focus:outline-none"
                       placeholder="Escribe tu nombre" required>
            </div>

            <!-- Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                <input type="email" name="email" id="email" 
                       class="mt-1 w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300 focus:outline-none"
                       placeholder="tuemail@ejemplo.com" required>
            </div>

            <!-- Asunto -->
            <div>
                <label for="asunto" class="block text-sm font-medium text-gray-700">Asunto</label>
                <input type="text" name="asunto" id="asunto" 
                       class="mt-1 w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300 focus:outline-none"
                       placeholder="Motivo de tu mensaje" required>
            </div>

            <!-- Mensaje -->
            <div>
                <label for="mensaje" class="block text-sm font-medium text-gray-700">Mensaje</label>
                <textarea name="mensaje" id="mensaje" rows="5"
                          class="mt-1 w-full border border-gray-300 rounded-lg p-3 focus:ring focus:ring-blue-300 focus:outline-none"
                          placeholder="Escribe tu mensaje aquí..." required></textarea>
            </div>

            <!-- Botón -->
            <div class="text-center">
                <button type="submit" 
                        class="w-full bg-blue-600 text-white font-semibold px-4 py-2 rounded-lg hover:bg-blue-700 transition">
                    Enviar Mensaje
                </button>
            </div>
        </form>
    </div>

</body>
</html>
