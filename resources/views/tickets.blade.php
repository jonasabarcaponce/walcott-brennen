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
      
      <x-application-logo class="fill-current text-black dark:text-gray-600 w-20" />

    </div>
  </header>

  <!-- Featured Concerts -->
  <section class="px-8 py-16 bg-white dark:bg-gray-900 transition-colors">
    <div class="max-w-7xl mx-auto">
      <h2 class="text-2xl font-bold mb-2 text-gray-900 dark:text-white">Nombre del concierto</h2>
      <p class="mb-6 text-gray-600 dark:text-gray-300">Auditorio Stoa</p>
      
      <!-- 2/3 Column Row -->
      <div class="flex flex-wrap -mx-4 mt-8">
        
        <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
          <!-- Left (2/3) content goes here -->
          <div class="bg-gray-100 dark:bg-gray-800 rounded-lg h-full overflow-hidden">
            <x-theaters.stoa />
          </div>
        </div>

        <div class="w-full md:w-1/3 px-4">
          <!-- Right (1/3) content goes here -->
          <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg h-full">
            <div id="seatSelectorContent">
              
            </div>
            <div id="seat-selector">

            </div>
          </div>
        </div>

        <div class="w-full md:w-1/3 px-4">
          <!-- Right (1/3) content goes here -->
          <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-lg h-full">
            <h3 class="text-lg font-semibold mb-2">Sidebar</h3>
            <p class="text-gray-600 dark:text-gray-400">This is the 1/3 width column. Add sidebar content here.</p>
          </div>
        </div>

      </div>

      @vite(['resources/js/theaters/stoa.js'])

    </div>
  </section>
</body>
</html>