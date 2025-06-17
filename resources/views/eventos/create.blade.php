<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Event') }}
        </h2>
    </x-slot>
    <div class="py-2">
        <form class="max-w-7xl mx-auto sm:px-6 lg:px-8" action="{{ route('eventos.store') }}" method="POST">
            @csrf
            
            <div class="space-y-6">

                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Event Name') }}</h2>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Enter a clear name for your event. This will help attendees recognize it easily.') }}
                        </p>
                    </header>
                    <div class="mt-4">
                        <input type="text" name="name" id="name" class="w-full border-gray-300 dark:border-gray-700 rounded p-2" autofocus required placeholder="{{ __('e.g. Summer Music Festival') }}">
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Event Date & Time') }}</h2>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Select the exact date and start time for your event in local time.') }}
                        </p>
                    </header>
                    <div class="mt-4">
                        <input type="datetime-local" name="date" id="date" class="w-full border-gray-300 dark:border-gray-700 rounded p-2" required>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Event Description') }}</h2>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Provide a detailed description of your event, including any special features or highlights.') }}
                        </p>
                    </header>
                    <div class="mt-4">
                        <textarea name="description" id="description" rows="4" class="w-full border-gray-300 dark:border-gray-700 rounded p-2" required placeholder="{{ __('Describe your event in detail...') }}"></textarea>
                    </div>
                </div>

                <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">{{ __('Event Location') }}</h2>
                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Choose the venue or location where your event will take place.') }}
                        </p>
                    </header>
                    <div class="mt-4">
                        <select name="location" id="location" class="w-full border-gray-300 dark:border-gray-700 rounded p-2" required>
                            <option value="" disabled selected>{{ __('Select a location') }}</option>
                            <option value="venue1">{{ __('Stoa Auditorium') }}</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        {{ __('Save') }}
                    </button>
                </div>
                
            </div>

        </form>
    </div>
</x-app-layout>
