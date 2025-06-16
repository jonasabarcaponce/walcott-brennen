<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/locations/auditorio-stoa.js'])
</head>
<body class="bg-white text-gray-900 font-poppins">
  <!-- Navbar -->
  <header class="shadow px-8 py-6 bg-white dark:bg-gray-900 transition-colors">
    <div class="max-w-7xl mx-auto flex items-center">
      
      <x-application-logo class="fill-current text-black dark:text-gray-600 w-20" />

    </div>
  </header>

  <div id="container">
    
  </div>

</body>
</html>