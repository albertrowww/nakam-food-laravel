<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>{{config('app.name', 'NakamFood')}}</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
       
    </head>
    <body>
        @include('include.navbar')
       <br>
        <div class='container'>
            @yield('content')
       </div>
    </body>
</html>
