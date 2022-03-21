<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&family=Playfair+Display&display=swap" rel="stylesheet">                
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/scss/main.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />

        

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            @include('layouts.navigation')

  

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            @include('layouts.footer')

        </div>
    </body>
</html>
