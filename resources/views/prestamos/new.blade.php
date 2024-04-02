<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Loans') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-8 bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <h1 class="text-center mt-4 text-xl font-bold">{{ __($title) }}</h1>
             
                <form action="{{ route('prestamos.new') }}" method="POST">
                    @csrf
            
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="titulo">Titulo del Libro: </label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="titulo" id="titulo">
                            @foreach ($books as $book)
                                <option value="{{ $book->titulo }}">{{ $book->titulo }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    @error('titulo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div >
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="nombre">Nombre Usuario: </label>
                        <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="nombre" id="nombre">
                            @foreach ($users as $user)
                                <option value="{{ $user->name }}">{{ $user->name }}</option>
                                
                            @endforeach
                        </select>
                    </div>
                    @error('nombre')
                        <div class="bg-red-300 p-1 rounded-lg mt-1">{{ $message }}</div>
                    @enderror
                    <div >
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="fecha_prestamo">Fecha Prestamo</label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="fecha_prestamo" id="fecha_prestamo" value="">
                    </div>
                    @error('fecha_prestamo')
                        <div class="bg-red-300 p-1 rounded-lg mt-1">{{ $message }}</div>
                    @enderror
                    <div >
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="fecha_devolucion">fecha de entrega: </label>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" type="date" name="fecha_devolucion" id="fecha_devolucion" value="">
                    </div>
                    @error('fecha_devolucion')
                        <div class="bg-red-300 p-1 rounded-lg mt-1">{{ $message }}</div>
                    @enderror

                    <div class="mt-4 flex gap-4 justify-center">
                        <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Prestar</button>
                        
                        <a href="{{ route('prestamos.index') }} ">
                            <button type="button" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Regresar</button>
                        
                        </a>
            
                    </div>
            
                </form>

            </div>
        </div>
    
    </div>
</x-app-layout>

