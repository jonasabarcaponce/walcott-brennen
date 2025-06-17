<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @foreach($eventos as $evento)
                <div class="border border-gray-200 dark:border-gray-800 rounded overflow-hidden shadow bg-white dark:bg-gray-800 transition-colors flex flex-col">
                <div class="aspect-w-16 aspect-h-9">
                    @if($evento->imagen)
                    <img src="{{ $evento->imagen }}" alt="{{ $evento->nombre }}" class="object-cover w-full h-full">
                    @else
                    <img src="https://picsum.photos/1280/720" alt="Placeholder image" class="object-cover w-full h-full">
                    @endif
                </div>
                <div class="p-4 flex flex-col flex-1">
                    <p class="text-sm text-jamband dark:text-white flex items-center mb-1">
                    <svg class="w-4 h-4 mr-1 inline-block text-jamband dark:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21c-4.418 0-8-5.373-8-10a8 8 0 1116 0c0 4.627-3.582 10-8 10z" />
                        <circle cx="12" cy="11" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
                    </svg>
                    {{ $evento->auditorio }}
                    </p>
                    <h3 class="font-bold text-lg text-gray-900 dark:text-white mb-1">{{ $evento->nombre }}</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-2">{{ $evento->fecha }} | {{ $evento->ciudad }}</p>
                    <p class="text-gray-700 dark:text-gray-300 flex-1 mb-4">{{ $evento->descripcion }}</p>
                    <button class="mt-auto bg-gray-900 text-white dark:bg-jamband dark:text-white px-4 py-2 rounded text-sm w-full transition-colors">
                    <i class="fas fa-pencil-alt mr-1"></i>
                    {{ __('Edit Event') }} 
                    </button>
                </div>
                </div>
            @endforeach
            </div>
        </div>
        <div class="mt-8">
            {{ $eventos->links() }}
        </div>
    </div>
</x-app-layout>
