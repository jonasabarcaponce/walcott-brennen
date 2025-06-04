<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Landing Page</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white text-gray-900">
  <!-- Navbar -->
  <header class="shadow px-8 py-6">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <div class="text-xl font-bold">
        Walcott <span class="font-light"> Brennen </span>
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

          <button class="bg-black text-white px-4 py-2 text-sm rounded">Sign Up</button>
        </div>
      @endguest 
    </div>
  </header>

  <!-- Hero Section -->
  <section class="px-8 py-16 bg-gradient-to-br from-white to-gray-100 relative">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
      <div>
        <p class="text-sm text-gray-600">{{ __('Where unforgettable concerts come to life.') }}</p>
        <h1 class="text-4xl font-bold leading-tight mb-4">
          <span class="text-gray-800">{{ __('Your access starts here') }}</span>
        </h1>
        <button class="bg-black text-white px-6 py-2 rounded">{{ __('Get your tickets now') }} →</button>
      </div>
    </div>
  </section>

  <!-- Featured Events -->
  <section class="px-8 py-16 bg-white">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-2xl font-bold mb-2">Featured Events</h2>
      <p class="mb-6 text-gray-600">Be sure not to miss these Event today.</p>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Card 1 -->
        <div class="border rounded overflow-hidden shadow">
          <img src="https://via.placeholder.com/300x200" alt="">
          <div class="p-4">
            <p class="text-sm text-blue-600">€200 - €500</p>
            <h3 class="font-bold text-lg">Digital thinkers meetup</h3>
            <p class="text-sm text-gray-500">29 Jan | Grand Chapiteau</p>
            <button class="mt-4 bg-gray-900 text-white px-4 py-2 rounded text-sm w-full">Get Tickets →</button>
          </div>
        </div>
        <!-- Card 2 -->
        <div class="border rounded overflow-hidden shadow">
          <img src="https://via.placeholder.com/300x200" alt="">
          <div class="p-4">
            <p class="text-sm text-blue-600">€100 - €800</p>
            <h3 class="font-bold text-lg">Web design conference 2023</h3>
            <p class="text-sm text-gray-500">29 Jan | Grand Chapiteau</p>
            <button class="mt-4 bg-gray-900 text-white px-4 py-2 rounded text-sm w-full">Get Tickets →</button>
          </div>
        </div>
        <!-- Card 3 -->
        <div class="border rounded overflow-hidden shadow">
          <img src="https://via.placeholder.com/300x200" alt="">
          <div class="p-4">
            <p class="text-sm text-blue-600">€250 - €1200</p>
            <h3 class="font-bold text-lg">Digital Economy Conference 2023</h3>
            <p class="text-sm text-gray-500">29 Jan | Grand Chapiteau</p>
            <button class="mt-4 bg-gray-900 text-white px-4 py-2 rounded text-sm w-full">Get Tickets →</button>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>