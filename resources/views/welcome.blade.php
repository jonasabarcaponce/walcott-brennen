<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900 font-poppins">
  <!-- Navbar -->
  <header class="shadow px-8 py-6 bg-white dark:bg-gray-900 transition-colors">
    <div class="max-w-7xl mx-auto flex items-center">
      <div class="text-xl font-lora font-extrabold text-gray-900 dark:text-white">
        Walcott Brennen
      </div>
      <div class="flex items-center ml-auto space-x-6">
        @auth
          <nav class="space-x-6 hidden md:block">
            <a href="#" class="hover:text-blue-500 text-gray-900 dark:text-gray-100">Dasboard</a>
            <a href="#" class="hover:text-blue-500 text-gray-900 dark:text-gray-100">Account</a>
          </nav>
        @endauth
        @guest
          <div class="flex items-center space-x-4">
            <div x-data="{ open: false }" class="relative inline-block text-left">
              <button @click="open = !open" type="button" class="inline-flex justify-center rounded border border-gray-300 dark:border-gray-700 shadow-sm px-4 py-2 bg-white dark:bg-gray-900 text-sm font-medium text-gray-700 dark:text-gray-200 hover:bg-gray-50 dark:hover:bg-gray-800 focus:outline-none" id="menu-button" aria-expanded="true" aria-haspopup="true">
                  @if(app()->getLocale() === 'es')
                  🇲🇽
                  @else
                  🇺🇸
                  @endif
                <svg class="-mr-1 ml-2 h-5 w-5 text-gray-700 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7l3-3 3 3m0 6l-3 3-3-3" />
                </svg>
              </button>
              <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white dark:bg-gray-900 ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
                <form method="POST" action="{{ route('language') }}">
                  @csrf
                  <button type="submit" name="locale" value="en" class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 {{ app()->getLocale() === 'en' ? 'font-bold' : '' }}">
                    English
                  </button>
                  <button type="submit" name="locale" value="es" class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 {{ app()->getLocale() === 'es' ? 'font-bold' : '' }}">
                    Español
                  </button>
                </form>
              </div>
            </div>
            <a href="{{ route('login') }}" class="bg-black dark:bg-white text-white dark:text-black px-4 py-2 text-sm rounded transition-colors">{{ __('Log in') }}</a>
          </div>
        @endguest 
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="px-8 py-16 bg-gradient-to-br from-white to-gray-100 relative dark:from-black dark:to-gray-800">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
      <div>
        <p class="text-sm text-gray-600 dark:text-gray-300">{{ __('Where unforgettable concerts come to life.') }}</p>
        <h1 class="text-4xl font-bold leading-tight mb-4">
          <span class="text-gray-800 dark:text-white">{{ __('Your access starts here') }}</span>
        </h1>
        <button class="bg-jamband text-white px-6 py-2 rounded transition-colors">{{ __('Get your tickets now') }} →</button>
      </div>
      <div class="flex justify-center md:justify-end">
        <img 
          src="{{ Vite::asset('resources/img/Woodstock-ForLightMode.png') }}" 
          alt="Band logo" 
          class="w-56 md:w-72 object-contain block dark:hidden"
        >
        <img 
          src="{{ Vite::asset('resources/img/Woodstock-ForDarkMode.png') }}" 
          alt="Band logo dark" 
          class="w-56 md:w-72 object-contain hidden dark:block"
        >
      </div>
    </div>
  </section>

  <!-- Featured Concerts -->
  <section class="px-8 py-16 bg-white dark:bg-gray-900 transition-colors">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-2xl font-bold mb-2 text-gray-900 dark:text-white">{{ __('Coming Up Live') }}</h2>
      <p class="mb-6 text-gray-600 dark:text-gray-300">{{ __('Your next favorite night is just a ticket away.') }}</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="border border-gray-200 dark:border-gray-800 rounded overflow-hidden shadow bg-white dark:bg-gray-800 transition-colors">
          <div class="aspect-w-16 aspect-h-9">
            <img src="https://picsum.photos/1280/720" alt="Concert placeholder image" class="object-cover w-full h-full">
          </div>
          <div class="p-4">
            <p class="text-sm text-jamband dark:text-white flex items-center">
              <svg class="w-4 h-4 mr-1 inline-block text-jamband dark:text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21c-4.418 0-8-5.373-8-10a8 8 0 1116 0c0 4.627-3.582 10-8 10z" />
                <circle cx="12" cy="11" r="3" stroke="currentColor" stroke-width="2" fill="none"/>
              </svg>
              Cancun
            </p>
            <h3 class="font-bold text-lg text-gray-900 dark:text-white">Digital thinkers meetsdasdup</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400">29 Jan | Grand Chapiteau</p>
            <button class="mt-4 bg-gray-900 text-white dark:bg-jamband dark:text-white px-4 py-2 rounded text-sm w-full transition-colors">{{ __('Get Tickets') }} →</button>
          </div>
        </div>
      </div>
    </div>
  </section>
  
</body>
</html>