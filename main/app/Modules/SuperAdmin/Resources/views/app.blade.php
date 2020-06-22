<!DOCTYPE html>
<html>

<head>
  <title>{{ $title ?? 'Welcome to ' . config('app.name') }}</title>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, shrink-to-fit=no">
  @routes('superadmin')
  <script src="{{ mix('/js/dashboard-app-vendor.js') }}" async></script>
  <link href="{{ mix('/css/dashboard-app-22-06-2020.css') }}" rel="stylesheet" />
  <script src="{{ mix('/js/manifest.js') }}" defer></script>
  <script src="{{ mix('/js/vendor.js') }}" defer></script>
  <script src="{{ mix('/js/dashboard-app.js') }}" defer></script>

  <link rel="icon" type="image/png" href="/img/favicon.png">
  <link rel="apple-touch-icon" href="/img/apple-touch-icon.png">

</head>

<body>
  @inertia
</body>

</html>
