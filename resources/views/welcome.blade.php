<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>Test Vue</title>
    </head>
    <body class="antialiased">
        
        <x-header></x-header>

        <div id="app">
            
            <product-table />

        </div>
    </body>
</html>
