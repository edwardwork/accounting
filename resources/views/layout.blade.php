<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @csrf

        <title>{{ config('app.name', 'Accounting') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased">
        @yield('header', view('header', ['homePage' => $homePage]))

        @include('question-form')
        <x-notifications.flash></x-notifications.flash>

        @yield('content')

        @yield('footer', view('footer'))
    </body>
</html>
