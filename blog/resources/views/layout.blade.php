<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog - @yield('title')</title>
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/blog-home.css') }}" rel="stylesheet">
<!-- <link href="https://fonts.googleapis.com/css?family=Anton|Nanum+Gothic" rel="stylesheet"> -->
<link rel="stylesheet" type="text/css" href="/css/app.css">
   </head>
    <body>
    @include('layout-header')
    <!--include de la pge layout-header où se trouve le code de la navigation bootstrap
  copier-coller de la pge index.html du template bootstrap -->
        <div class="container"> <!--cf Page Content de index.html du template bootstrap-->
          <div class="row">
            @yield('content')
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    </body>
</html>

