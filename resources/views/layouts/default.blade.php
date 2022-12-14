<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DC - @yield('title')</title>

        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">    
        
        <!-- styles -->
        <link rel="stylesheet" href="{{asset('css/global.css')}}">
        @yield('css')
    </head>
    <body>

        @include('partials.header')
        <main>

            <ul class="errors-group">
            @foreach($errors->all() as $error)
                <li class="error">{{$error}}</li>
            @endforeach
            </ul>

            @yield('content')
        </main>
    </body>
</html>
