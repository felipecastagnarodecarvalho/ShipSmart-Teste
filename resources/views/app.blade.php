<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name')}}</title>
        <link rel="stylesheet" href="{{ mix('resources/css/app.css') }}">
    </head>
    <body>
        <div id="app">
            <add-contact />
        </div>
        <script type="module" src="{{ mix('resources/js/app.js') }}"></script>
    </body>
</html>
