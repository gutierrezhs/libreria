<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg">

    <div class="grid gap-6 mb-6 lg:grid-cols-2">
        <div>
            <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ empty($prestamos) ? old('autor') : $prestamos->user_id }}" required>
            @error('titulo')
                <div class="bg-red-300 p-1 rounded-lg mt-1">{{ $message }}</div>
            @enderror
        </div>
        
    </div>

</div>








