<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
        {{-- <script src="{{ mix('/js/manifest.js') }}"></script> --}}
        {{-- <script src="{{ mix('/js/vendor.js') }}"></script> --}}
        <script src="{{ mix('/js/app.js') }}" defer></script>
        {{-- @php dump($page) @endphp --}}
    </head>

    <body>
        @inertia
    </body>

</html>
