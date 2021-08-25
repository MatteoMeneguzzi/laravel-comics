<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('heading', 'DC Comics')</title>
        {{-- Favicon --}}
        {{-- <link rel="icon" type="image/png" href="../../../public/img/dc-logo.png" sizes="16x16"> --}}
        <link rel="icon" 
      type="image/png" 
      href="http://example.com/myicon.png">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        {{-- CSS --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        
           
               @include('partials.header')
                       
                       <main>
                @yield('content')
                       </main>
                @include('partials.footer')
        
       
        {{-- JS --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
