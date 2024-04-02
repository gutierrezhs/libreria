<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    {{-- {{ $mensaje }} --}}
    @if (session('status'))
        <div class="alert alert-success max-w-7xl mx-auto mt-2 p-2 sm:px-6 lg:px-8 bg-green-600 text-center">
            {{ session('status') }}
        </div>
    @endif


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-center">
                    <a href="{{ route('books.create') }}">
                        <x-button class="my-5">
                            {{ __('Create a new Book') }}
                        </x-button>

                    </a>
                    
                </div>
                <table class="items-center bg-transparent w-full border-collapse ">
                    @if (count($books)>=1)
                        <thead>
                        <tr>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                    {{ __('Title') }}
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                {{ __('Author') }}
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                {{ __('Year of publication') }}
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                {{ __('Gender') }}
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                {{ __('Available') }}
                            </th>
                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                Botones
                            </th>
                        </tr>
                        </thead>
                    @endif
                    <tbody>
                        @forelse ($books as $book)
                            <tr>
                                <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 text-left">
                                    {{ $book->titulo }}
                                </th>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                    {{ $book->autor }}
                                </td>
                                <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                    {{ $book->anno_publicacion }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                    {{ $book->genero }}
                                </td>
                                <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">
                                    {{ $book->disponible }}
                                </td>
                                <td class="border-t-0 px-6 align-center border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center">

                                    <div>
                                        <a href="{{ route('books.edit', $book) }}"><x-danger-button type="button">{{ __('Edit') }}</x-danger-button></a>
                                        <a href="{{ route('books.delete',$book) }}"><x-danger-button>{{ __('Delete') }}</x-danger-button></a>
                                    </div>
                                    
                                </td>
                            </tr>

                            @empty
                                <p class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-center bg-red-400 font-bold">No existe registro para mostrar</p>
                        @endforelse
                    </tbody>
            
                  </table>
            </div>
            <div class="my-5">
                {{ $books->links() }}

            </div>
        </div>
    </div>
</x-app-layout>
