<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Loans') }}
        </h2>
    </x-slot>

    {{-- {{ $mensaje }} --}}

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center">
                    <a href="{{ route('prestamos.new') }}">
                        <x-button class="m-5">
                            {{ __('Create a new Loan') }}
                        </x-button>

                    </a>
                    
                </div>
                <table class="items-center bg-transparent w-full border-collapse ">
                    @if (count($prestamos) >= 1) 
                        <thead>
                            <tr>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                {{ __('User') }}
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                {{ __('Title') }}
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                {{ __('Author') }}
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                {{ __('Loan day') }}
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                {{ __('Return date') }}
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                {{ __('Available') }}
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                
                            </th>
                            </tr>
                        </thead>                   
                    @endif
           
                    <tbody>
                        @forelse ($prestamos as $prestamo)
                            <tr>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 text-center">
                                    {{ $prestamo->user->name }}
                                </th>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 text-left">
                                    {{ $prestamo->book->titulo }}
                                </th>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                    {{ $prestamo->book->autor }}
                                </td>
                                <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                    {{ $prestamo->fecha_prestamo }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                    {{ $prestamo->fecha_devolucion }}
                                </td>
                                <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                    {{ $prestamo->book->disponible }}
                                </td>
                                <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                    <a href="{{ route('prestamos.delete',$prestamo) }}">
                                        <x-danger-button>{{ __('Return') }}</x-danger-button>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <p class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center bg-red-400 font-bold">No existe registro para mostrar</p>
                        @endforelse
                    </tbody>
            
                  </table>
            </div>
            <div class="my-5">
                {{ $prestamos->links() }}

            </div>
        </div>
    </div>
</x-app-layout>
