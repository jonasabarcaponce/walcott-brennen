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
  <header class="shadow px-8 py-6">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <div class="text-xl font-lora font-extrabold">
        Walcott Brennen
      </div>
      @auth
        <nav class="space-x-6 hidden md:block">
          <a href="#" class="hover:text-blue-500">Dasboard</a>
          <a href="#" class="hover:text-blue-500">Account</a>
        </nav>
      @endauth
      @guest
        <div class="space-x-4">
          <div x-data="{ open: false }" class="relative inline-block text-left">
            <button @click="open = !open" type="button" class="inline-flex justify-center w-full rounded border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none" id="menu-button" aria-expanded="true" aria-haspopup="true">
                @if(app()->getLocale() === 'es')
                🇲🇽
                @else
                🇺🇸
                @endif
              <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7l3-3 3 3m0 6l-3 3-3-3" />
              </svg>
            </button>
            <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-32 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-10">
              <form method="POST" action="{{ route('language') }}">
                @csrf
                <button type="submit" name="locale" value="en" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ app()->getLocale() === 'en' ? 'font-bold' : '' }}">
                  English
                </button>
                <button type="submit" name="locale" value="es" class="block w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 {{ app()->getLocale() === 'es' ? 'font-bold' : '' }}">
                  Español
                </button>
              </form>
            </div>
          </div>
            <button class="bg-black text-white px-4 py-2 text-sm rounded">{{ __('Login') }}</button>
        </div>
      @endguest 
    </div>
  </header>

  {{ $slot }}
    
</body>
</html>