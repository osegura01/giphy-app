@include('base.header')
<div class="container mx-auto p-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-6">Perfil</h2>
            <form class="space-y-4">
                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Nombre</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Primer apellido</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Segundo apellido</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Fecha de nacimiento</label>
                    <input type="date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Género</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Seleccionar</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                        <option value="O">Otro</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Usuario</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">E-mail</label>
                    <input type="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <div class="space-y-2">
                    <label class="block text-sm font-medium text-gray-700">Contraseña</label>
                    <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Guardar
                </button>
            </form>
        </div>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <h2 class="text-xl font-semibold mb-6">Historial de búsqueda</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Búsqueda</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Source</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Sample Search</td>
                            <td class="px-6 py-4 whitespace-nowrap">2024-01-20</td>
                            <td class="px-6 py-4 whitespace-nowrap">Web</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('base.footer')