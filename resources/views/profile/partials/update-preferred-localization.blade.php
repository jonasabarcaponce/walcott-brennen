<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Preferred Language') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Choose the language you want to use for the app and website.') }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.language.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        <div>
            <x-input-label for="locale" :value="__('Language')" />
            <select id="locale" name="locale" class="mt-1 block w-full rounded-md border-gray-300 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-100 focus:border-indigo-500 focus:ring-indigo-500">
                <option value="en" @selected(old('locale', ($user->language ?? Auth::user()->language ?? app()->getLocale())) === 'en')>English</option>
                <option value="es" @selected(old('locale', ($user->language ?? Auth::user()->language ?? app()->getLocale())) === 'es')>Español</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('locale')" />
        </div>
        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
            @if (session('status') === 'language-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
