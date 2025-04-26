<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name')}}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 font-sans antialiased">


<div class="flex h-screen">

{{--    side bar and menus--}}
<x-admin.navbar/>

    <div class="flex-1 flex flex-col">

{{--        header has log out options / profile view--}}
        <x-admin.header/>

        <main class="flex-1 p-6 overflow-y-auto">
            <div class="max-w-7xl mx-auto">

                @yield('content')
            </div>
        </main>

    </div>

</div>





</body>
</html>
