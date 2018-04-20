<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="{{ mix('js/manifest.js') }}" defer></script>
        <script src="{{ mix('js/vendor.js') }}" defer></script>
        <script src="{{ mix('js/app.js') }}" defer></script>

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="bg-grey-lightest">
        @component('components.nav')
        @endcomponent

        <main>
            @yield('content')
        </main>
    </body>
</html>
