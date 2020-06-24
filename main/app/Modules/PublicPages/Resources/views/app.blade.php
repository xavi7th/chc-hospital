<!DOCTYPE html>
<html>

<head>
  @routes('public')

  <title>{{$title ?? 'Welcome to ' . config('app.name') }}</title>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="format-detection" content="telephone=yes">
  <meta name="description" content="{{$description ?? 'Capitol Hill Clinic/Hospital is a multi-functional hospital, Situated at Ranyo’s Place, Warri, Nigeria. Our Medical Center is an all purpose general specialist practice enclave with non partnership group practice encompassing surgery, obstetrics etc.'}}" />
  <meta name="keywords" content="{{$keywords ?? 'hospital, clinic, laboratory, surgery, capitol hill hospital, warri, delta state, nigeria, specialist, medical'}}" />
  <meta name="author" content="Minds&Machines and Codekago Interactive" />

  <meta property="og:title" content="{{$title ?? 'Welcome to ' . config('app.name')}}" />
  <meta property="og:description" content="{{$description ?? 'Capitol Hill Clinic/Hospital is a multi-functional hospital, Situated at Ranyo’s Place, Warri, Nigeria. Our Medical Center is an all purpose general specialist practice enclave with non partnership group practice encompassing surgery, obstetrics etc.'}}" />
  <meta property="og:image" content="{{$ogImg ?? '/img/resources/logo.png'}}" />
  <meta property="og:url" content="{{url()->full() ?? 'https://capitolhillhospitals.com.ng/'}}" />
  <meta property="og:type" content="website" />
  <meta property="og:locale" content="en_GB" />

  <meta name="twitter:title" content="{{ $title ?? 'Welcome to ' . config('app.name') }}">


  <link rel="canonical" href="{{$canonicalUrl ?? url()->current()}}" />

  <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
  <link rel="shortcut icon" href="/img/favicon.png" type="image/png">

  <script src="{{ mix('/js/admin-app-vendor.js') }}" defer async></script>
  <script src="{{ mix('/js/manifest.js') }}" defer></script>
  <script src="{{ mix('/js/vendor.js') }}" defer></script>
  <script src="{{ mix('/js/app.js') }}" defer></script>




  <script src="//code.tidio.co/mnnsj7low91r0tgc6ftn9dieebfxgwbx.js" async></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-154128140-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-154128140-1');
  </script>

  <?php

  if ($page == 'news-details') {
    ?>
    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1073710369324766";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
  <?php
}

?>



  {{-- @php dump($page) @endphp --}}

</head>

<body>
  @inertia







</body>

</html>
