<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

     @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-200 flex items-center justify-center min-h-screen">

    @yield('content')

</body>
</html>
