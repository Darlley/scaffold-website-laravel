<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.head />

        <!-- STYLES -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles
        
        <!-- SCRIPTS -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @unless (Auth::check())
                <x-partials.menu /> <!-- MENU FRONTEND -->
            @else
                @livewire('navigation-menu')
                <!-- Page Heading -->
                @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
                @endif
            @endunless

            <x-partials.header />
            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <x-partials.footer />
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
