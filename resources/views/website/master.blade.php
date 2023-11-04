<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <title>Evara - eCommerce HTML Template</title>
    @include('website.includes.style')

</head>
<body>
@include('website.includes.header')
<main class="main">
    @yield('body')
</main>
@include('website.includes.footer')
<!-- Preloader Start -->
@include('website.includes.script');
</body>

</html>