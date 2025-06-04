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
        SOCIETHY <span class="font-light">PARIS</span>
      </div>
      <nav class="space-x-6 hidden md:block">
        <a href="#" class="hover:text-blue-500">Dashboard</a>
        <a href="#" class="hover:text-blue-500">About</a>
        <a href="#" class="hover:text-blue-500">Events</a>
        <a href="#" class="hover:text-blue-500">Blogs</a>
        <a href="#" class="hover:text-blue-500">Contact</a>
      </nav>
      @if (Route::has('login'))
        <!-- You can add login/register links here if needed -->
      @endif
      <div class="space-x-4">
        <button class="text-sm font-medium">Log In</button>
        <button class="bg-black text-white px-4 py-2 text-sm rounded">Sign Up</button>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="px-8 py-16 bg-gradient-to-br from-white to-gray-100 relative">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
      <div>
        <p class="text-sm text-gray-600">All the fun starts here.</p>
        <h1 class="text-4xl font-bold leading-tight mb-4">
          Book your <br>
          <span class="text-gray-800">Tickets for Event!</span>
        </h1>
        <ul class="space-y-2 mb-6">
          <li class="flex items-center space-x-2">
            <span class="text-green-500 font-bold">•</span>
            <span>Safe, Secure, Reliable ticketing.</span>
          </li>
          <li class="flex items-center space-x-2">
            <span class="text-green-500 font-bold">•</span>
            <span>Your ticket to live entertainment!</span>
          </li>
        </ul>
        <button class="bg-black text-white px-6 py-2 rounded">Lorem text →</button>
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