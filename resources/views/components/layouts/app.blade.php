<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>{{ $title ?? config('app.name') }}</title>
    </head>
    <body class="bg-gray-100">
        <livewire:comoponents.sidebar/>
        <div class="ml-[250px] px-5 py-5">
            {{ $slot }}
        </div>
    </body>
</html>
