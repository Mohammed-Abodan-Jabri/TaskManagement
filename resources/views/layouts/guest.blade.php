<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{asset('assets/img/logo-app.png')}}" rel="icon">
        <link href="{{asset('assets/img/logo-app.png')}}" rel="apple-touch-icon">
        <title>{{__('comon.title_project')}}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div>
                <a href="{{asset('assets/img/logo-app.png')}}">
                    <img class="w-20 h-20 fill-current text-gray-500" src="{{asset('assets/img/logo-app.png')}}" alt="logo">
                    {{--                    <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
                </a>
            </div>
{{--            <div  class="title-project w-full sm:max-w-md mt-6 px-6 py-4 bg-secondary">--}}
{{--                <h1 > أهــلا بــــك في تطـــبيق ادارة المهــام</h1>--}}
{{--            </div>--}}
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg mb-3">

{{--                <div class="card-title-auth">--}}
{{--                    <a href="{{asset('assets/img/task-img1.png')}}">--}}
{{--                        <img class="w-20 h-20 fill-current text-gray-500" src="{{asset('assets/img/task-img1.png')}}" alt="شعار">--}}
{{--                    </a>--}}
{{--                </div>--}}
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
