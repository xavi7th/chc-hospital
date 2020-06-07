<!DOCTYPE html>
<html>

    <head>
        @routes('public')

        <title>{{$title ?? 'Welcome to ' . config('app.name') }}</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="twitter:title" content="{{ $title ?? 'Welcome to ' . config('app.name') }}">

        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />

        <script src="{{ mix('/js/manifest.js') }}" defer></script>
        <script src="{{ mix('/js/vendor.js') }}" defer></script>
        <script src="{{ mix('/js/app.js') }}" defer></script>

        {{-- @php dump($page) @endphp --}}

    </head>

    <body>
        @inertia
    </body>

</html>
