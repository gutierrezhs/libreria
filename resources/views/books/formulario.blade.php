<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg">

    <div class="grid gap-6 mb-6 lg:grid-cols-2">
        <div>
            <label for="titulo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Titulo</label>
            <input type="text" name="titulo" id="titulo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ empty($book) ? old('titulo') :  $book->titulo }}" placeholder="Titulo del Libro"  >
                       
            @error('titulo')
                <div class="bg-red-300 p-1 rounded-lg mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="autor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Autor</label>
            <input type="text" name="autor" id="autor" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ empty($book) ? old('autor') :  $book->autor }}" placeholder="Autor del Libro" >
            @error('autor')
                <div class="bg-red-300 p-1 rounded-lg mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="anno_publicacion" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Año de Publicación</label>
            <input type="date" name="anno_publicacion" id="anno_publicacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ empty($book) ? old('anno_publicacion') :  $book->anno_publicacion }}" >
            @error('anno_publicacion')
                <div class="bg-red-300 p-1 rounded-lg mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="campos">
            <label for="genero" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Género del Libro: </label>
            <select name="genero" name="genero" id="genero" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option value="-- --" disabled selected>-- --</option>
                <option value="aventuras" {{ (isset($book)) ? (($book->genero==='aventuras') ? 'selected' : '') : '' }}  >Aventura</option>
                <option value="cienciaficcion" {{ (isset($book)) ? (($book->genero==='cienciaficcion') ? 'selected' : '') : '' }} >Ciencia Ficción</option>
                <option value="policiaca" {{ (isset($book)) ? (($book->genero==='policiaca') ? 'selected' : '') : '' }}>Policíaca</option>
                <option value="terrormisterio" {{ (isset($book)) ? (($book->genero==='terrormisterio') ? 'selected' : '') : '' }}>Terror y misterio</option>
                <option value="romantica" {{ (isset($book)) ? (($book->genero==='romantica') ? 'selected' : '') : '' }}>Romantica</option>
                <option value="mitologia" {{ (isset($book)) ? (($book->genero==='mitologia') ? 'selected' : '') : '' }}>Mitología</option>
                <option value="teatro" {{ (isset($book)) ? (($book->genero==='teatro') ? 'selected' : '') : '' }}>Teatro</option>
                <option value="cuento" {{ (isset($book)) ? (($book->genero==='cuento') ? 'selected' : '') : '' }}>Cuento</option>
            </select>
            @error('genero')
                <div class="bg-red-300 p-1 rounded-lg mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="disponible" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Disponibilidad</label>
            <input type="number" name="disponible" id="disponible" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ empty($book) ? old('disponible') : $book->disponible }}" placeholder="ejem. 2" >
            @error('disponible')
                <div class="bg-red-300 p-1 rounded-lg mt-1">{{ $message }}</div>
            @enderror
        </div>
        
    </div>

</div>








