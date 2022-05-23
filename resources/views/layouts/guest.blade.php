<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-partials.head />

    <!-- STYLES -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <livewire:styles />
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <livewire:scripts />
    </body>
</html>
