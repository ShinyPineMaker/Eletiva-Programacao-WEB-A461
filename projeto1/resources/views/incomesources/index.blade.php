<x-app-layout>
    <x-slot name="header" >
        <div class="flex flex-row justify-between content-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Fontes de Renda
            </h2>
            <a href="{{route('incomesources.create')}}">
                <x-primary-button>
                    Criar nova Fonte de Renda
                </x-primary-button>
            </a>
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
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-300">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Descrição
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Renda Mensal
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Renda Anual
                                </th>
                                <th scope="col" class="px-6 py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($incomeSources as $incomesource)
                                <tr class="bg-white @if($loop->index < count($incomeSources)) border-b @endif">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{$incomesource['description']}}</td>
                                    <td class="px-6 py-4">{{$incomesource->monthly_income}}</td>
                                    <td class="px-6 py-4">{{$incomesource->annual_income}}</td>
                                    
                                    <td class="px-6 py-4">
                                        <a href="{{route('incomesources.edit', $incomesource->id)}}">
                                            <x-primary-button style="margin: 1vh 0vh">
                                                Editar
                                            </x-primary-button>
                                        </a>
                                        <form method="post" action="{{ route('incomesources.destroy', $incomesource->id) }}" onsubmit = "return confirm('Deseja excluir essa Fonte de Renda?')">
                                            @csrf
                                            @method('DELETE')
                                            <x-primary-button type="submit" class="btn">
                                                Deletar
                                            </x-primary-button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <td class="px-6 py-4 font-medium text-white-900 whitespace-nowrap">
                                    Não existem Fontes de Renda cadastradas
                                </td>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>