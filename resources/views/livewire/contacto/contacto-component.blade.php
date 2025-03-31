<div>
    <h1 class="mt-36 text-2xl font-medium text-gray-900">Contacto</h1>
    <form>
        <div class="mb-4">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
            <input type="text" id="name" name="name"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Correo Electrónico:</label>
            <input type="email" id="email" name="email"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required>
        </div>
        <div class="mb-4">
            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Mensaje:</label>
            <textarea id="message" name="message" rows="4"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                required></textarea>
        </div>
        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Enviar
            </button>
        </div>
    </form>
</div>
