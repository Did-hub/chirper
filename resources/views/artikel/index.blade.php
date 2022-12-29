<x-app-layout>    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikle') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach($artikels as $artikel)

                    <x-dropdown>
                        <x-slot name="trigger">
                            <button>
                                {{$artikel['name']}}
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                                                      
                            <x-dropdown-link :href="route('variantes.index')">
                                {{ __('Variante') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('artikel.edit', $artikel)">
                                {{ __('Edit') }}
                            </x-dropdown-link>
                            <form method="POST" action="{{ route('artikel.destroy', $artikel) }}">
                                @csrf
                                @method('delete')
                                <x-dropdown-link :href="route('artikel.destroy', $artikel)" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Delete') }}
                                </x-dropdown-link>
                            </form>  
                        </x-slot>
                    </x-dropdown>

                    @endforeach         

                    

                </div>
            </div>
        </div>
    </div>    
    
    <a href="{{ route('artikel.create') }}" class="btn btn-xs btn-info pull-right">Create</a>
</x-app-layout>