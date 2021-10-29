<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Gillian Heyns, Jonas Van Hove, Axl Kesters"/>
    <meta name="keywords" content="ITF, IT Factory, Thomas More, Thomas More Geel, Studeren in Geel, IT-Factory"/>
    <meta name="title" content="IT Factory"/>
    <meta name="description"
          content="De IT Factory is de gemeenschappelijke richting Elektronica/ICT – Toegepaste Informatica van Thomas More hogeschool campus Geel."/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
    <title>@yield('title', 'IT Factory | Home')</title>
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigation')
@yield('main', 'page under construction...')
{{--  Footer  --}}
@include('shared.footer')
<script src="{{ mix('js/app.js') }}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
</body>
</html>
