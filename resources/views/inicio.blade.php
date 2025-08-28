<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>MiRedSocial - Inicio</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- NAVBAR -->
    <nav class="bg-white shadow-md px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-blue-600">MiRedSocial</h1>
        <div class="space-x-4">
            <a href="#" class="text-gray-600 hover:text-blue-600">Inicio</a>
            <a href="#" class="text-gray-600 hover:text-blue-600">Amigos</a>
            <a href="#" class="text-gray-600 hover:text-blue-600">Mensajes</a>
            <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Perfil</a>
        </div>
    </nav>

    <!-- CONTENEDOR PRINCIPAL -->
    <div class="container mx-auto mt-6 grid grid-cols-12 gap-6">
        
        <!-- SIDEBAR IZQUIERDO -->
        <aside class="col-span-3 bg-white p-4 rounded-xl shadow-md">
            <h2 class="text-lg font-semibold mb-4">Menú</h2>
            <ul class="space-y-2">
                <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Noticias</a></li>
                <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Amigos</a></li>
                <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Grupos</a></li>
                <li><a href="#" class="block p-2 rounded hover:bg-gray-100">Configuración</a></li>
            </ul>
        </aside>

        <!-- FEED CENTRAL -->
        <main class="col-span-6 space-y-6">
            
            <!-- Caja de publicación -->
            <div class="bg-white p-4 rounded-xl shadow-md">
                <textarea placeholder="¿Qué estás pensando?" 
                          class="w-full border rounded-lg p-3 focus:ring focus:ring-blue-300"></textarea>
                <button class="mt-2 bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">Publicar</button>
            </div>

            <!-- Ejemplo de publicaciones -->
            <div class="bg-white p-4 rounded-xl shadow-md">
                <div class="flex items-center mb-2">
                    <div class="w-10 h-10 bg-gray-300 rounded-full"></div>
                    <div class="ml-3">
                        <p class="font-semibold">Usuario Demo</p>
                        <p class="text-sm text-gray-500">Hace 2 horas</p>
                    </div>
                </div>
                <p class="mb-3">Este es un ejemplo de publicación en la red social 🚀</p>
                <div class="flex space-x-4 text-gray-600">
                    <button class="hover:text-blue-600">👍 Me gusta</button>
                    <button class="hover:text-blue-600">💬 Comentar</button>
                    <button class="hover:text-blue-600">↪️ Compartir</button>
                </div>
            </div>
        </main>

        <!-- SIDEBAR DERECHO -->
        <aside class="col-span-3 bg-white p-4 rounded-xl shadow-md">
            <h2 class="text-lg font-semibold mb-4">Personas que quizá conozcas</h2>
            <ul class="space-y-3">
                <li class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                        <p class="ml-2">Ana Pérez</p>
                    </div>
                    <button class="text-sm bg-blue-600 text-white px-2 py-1 rounded">Agregar</button>
                </li>
                <li class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                        <p class="ml-2">Juan López</p>
                    </div>
                    <button class="text-sm bg-blue-600 text-white px-2 py-1 rounded">Agregar</button>
                </li>
            </ul>
        </aside>
    </div>

</body>
</html>
