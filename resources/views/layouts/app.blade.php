<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <x-partials.head />

        <!-- STYLES -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <livewire:styles />
        
        <!-- SCRIPTS -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    
    <body class="font-sans antialiased">
        
        <div class="min-h-screen bg-gray-100">
            @unless (Auth::check())
            <x-partials.header />
            @else
                <x-jet-banner />
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

            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            <x-partials.footer />
        </div>

        @stack('modals')

        <livewire:scripts />
    </body>
</html>
