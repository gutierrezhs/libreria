<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Loans') }}
        </h2>
    </x-slot>

    <div class="formulario">
        <h1 class="text-center my-4 text-xl font-bold">{{ $title }}</h1>
        
        <form action="{{ route('prestamos.edit', $prestamo) }}" method="POST">
        @csrf
    
            @include('prestamos.formulario')
    
            <div class="my-4 flex gap-4 justify-center">
                <button type="submit" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Editar</button>
                
                <a href="{{ route('prestamos.index') }} ">
                    <button type="button" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Regresar</button>
                
                </a>
    
            </div>
    
        </form>
    
    </div>
   
</x-app-layout>


