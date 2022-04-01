<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lora&family=Noto+Sans+JP&family=Noto+Serif+JP:wght@700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('/scss/main.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://use.fontawesome.com/3ff405cac3.js"></script>

        

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

        @if(\Route::is(['mypage', 'mypage.*']))
            @include('layouts.mypage_navigation')
        @else
            @include('layouts.navigation')
        @endif
  

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>

            @include('layouts.footer')

        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <script>
            var navPos = jQuery( '#global-nav' ).offset().top; // グローバルメニューの位置
            var navHeight = jQuery( '#global-nav' ).outerHeight(); // グローバルメニューの高さ
            jQuery( window ).on( 'scroll', function() {
                if ( jQuery( this ).scrollTop() > navPos ) {
                    jQuery( 'body' ).css( 'padding-top', navHeight );
                    jQuery( '#global-nav' ).addClass( 'm_fixed' );
                } else {
                    jQuery( 'body' ).css( 'padding-top', 0 );
                    jQuery( '#global-nav' ).removeClass( 'm_fixed' );
                }
            });
        </script>
    </body>
</html>
