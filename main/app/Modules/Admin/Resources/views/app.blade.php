<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        @routes('admin')
        <link href="{{ mix('/css/admin.css') }}" rel="stylesheet" />
        <script src="{{ mix('/js/manifest.js') }}"></script>
        <script src="{{ mix('/js/vendor.js') }}"></script>
        <script src="{{ mix('/js/admin.js') }}" defer></script>

        <meta name="twitter:title" content="{{ $title ?? 'Welcome to ' . config('app.name') }}">

        {{-- @php dump($page) @endphp --}}
    </head>

    <body>
        @inertia
    </body>

</html>
