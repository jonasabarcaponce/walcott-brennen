<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-poppins antialiased bg-gray-100 text-gray-900 dark:text-gray-300 dark:bg-gray-900">
        <div class="mx-auto items-center max-w-[1200px]">
            <div class="flex h-screen">
                <!-- Sidebar for desktop -->
                <nav class="hidden md:flex flex-col w-64 h-full">
                    <x-application-logo class="fill-current text-black dark:text-gray-600 mx-auto w-20 py-10 mb-3" />
                    <x-nav-link :href="route('concerts.index')" :active="request()->routeIs('concerts.index')">
                        <i class="fa-solid fa-music mr-4"></i>
                        {{ __('Concerts') }}
                    </x-nav-link>
                    <x-nav-link href="#">
                        <i class="fa-solid fa-chart-simple mr-4"></i>
                        {{ __('Analytics') }}
                    </x-nav-link>
                    <x-nav-link href="#">
                        <i class="fa-solid fa-bag-shopping mr-4"></i>
                        {{ __('Shop') }}
                    </x-nav-link>
                    <x-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                        <i class="fa-solid fa-user mr-4"></i>
                        {{ __('Account') }}
                    </x-nav-link>
                </nav>

                <!-- Main content -->
                <div class="flex-1 flex flex-col">
                    <!-- Page Heading -->
                    @isset($header)
                        <header>
                            <div class="max-w-7xl py-10 px-4 sm:px-6 lg:px-8 flex justify-between items-center">
                                {{ $header }}
                                @if (request()->routeIs('concerts.*'))
                                    <div>
                                        <button class="bg-jamband text-quireBlack font-bold text-sm py-2 px-4 rounded-3xl text-white">
                                            <i class="fa-solid fa-plus mr-1"></i>
                                            {{ __('Create Concert') }} 
                                        </button>
                                    </div>
                                @endif
                                @if (request()->routeIs('profile.*'))
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="bg-jamband text-quireBlack font-bold text-sm py-2 px-4 rounded-3xl text-white">
                                            <i class="fa-solid fa-right-from-bracket mr-1"></i>
                                            {{ __('Log Out') }}
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </header>
                    @endisset
                
                    <!-- Content -->
                    <main class="flex-1 p-4">
                        {{ $slot }}
                    </main>
                    
                </div>
            </div>
            
        </div>
    
        <!-- Bottom navbar for mobile -->
        <nav class="fixed bottom-0 left-0 right-0 md:hidden shadow-lg bg-gray-100 dark:bg-gray-800">
            <nav class="flex justify-around">
                <x-responsive-nav-link :href="route('concerts.index')" :active="request()->routeIs('concerts.index')">
                    <i class="fa-solid fa-wallet mb-1"></i>
                    <span class="text-xs">Conciertos</span>
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#">
                    <i class="fa-solid fa-chart-simple mb-1"></i>
                    <span class="text-xs">Estadisticas</span>
                </x-responsive-nav-link>
                <x-responsive-nav-link href="#">
                    <i class="fa-solid fa-bag-shopping mb-1"></i>
                    <span class="text-xs">Tienda</span>
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('profile.edit')" :active="request()->routeIs('profile.edit')">
                    <i class="fa-solid fa-user mb-1"></i>
                    <span class="text-xs">Cuenta</span>
                </x-responsive-nav-link>

            </nav>
        </nav>

    </body>
</html>
