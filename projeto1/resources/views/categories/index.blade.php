<x-app-layout>
    <x-slot name="header" >
        <div class="flex flex-row justify-between content-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Categorias
            </h2>
        </div>
    </x-slot>
    @if (session('status'))
        <div
            class="absolute bottom-4 right-4 inline-flex items-center px-12 py-8 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
            x-data="{ show: true }"
            x-show="show"
            x-transition
            x-init="setTimeout(() => show = false, 2000)"
        >{{session('status')}}</div>
    @endif
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                    @forelse ($categories as $category)
                    {{$category->name}}        

                    @empty
                        Nao ha categorias cadastradas
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>