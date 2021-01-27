<!DOCTYPE html>
<html>

<head>
	<title>{{ $title ?? 'Welcome to ' . config('app.name') }}</title>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, shrink-to-fit=no">
	@routes('superadmin')
	<link rel="icon" type="image/png" href="/img/favicon.png">
	<link rel="apple-touch-icon" href="/img/apple-touch-icon.png">

	<script src="{{ mix('/js/dashboard-app-vendor.js') }}" async></script>

</head>

<body>
	@inertia

	<script src="{{ mix('/js/manifest.js') }}" defer></script>
	<script src="{{ mix('/js/vendor.js') }}" defer></script>
	<script src="{{ mix('/js/dashboard-app.js') }}" defer></script>
	<link rel="stylesheet" href="{{ mix('css/admin-app.css') }}">



</body>

</html>
