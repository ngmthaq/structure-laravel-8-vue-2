<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('image/logo_png_removebg.png') }}" type="image/x-icon">
    <title> {{ env('APP_NAME') }} </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <noscript>Your browser is disabled or not supported Javascript</noscript>

    <div id="app"></div>

    <script>
        window.translations = {!! $translations !!};
        window.translationJsons = {!! $translationJsons !!};
        window.appLocale = '{!! app()->getLocale() !!}';
        window.locales = JSON.parse('{!! $locales !!}');
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
