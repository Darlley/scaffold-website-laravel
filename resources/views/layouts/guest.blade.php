<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-partials.head />

    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
