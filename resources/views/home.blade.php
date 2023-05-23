<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Easygration') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="h-screen bg-cover bg-no-repeat bg-opacity-60 bg-[url('/resources/assets/images/landscapehome.jpg')]">
        <div class="h-screen bg-cover bg-black bg-opacity-40">
            <x-nav-bar textColor="white" logo="false" />
            <x-home-hero />
        </div>
    </div>
</body>

</html>

