<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <title>@yield('title', 'IT Factory | Home')</title>
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigationacs')
@yield('main', 'page under construction...')
{{--  Footer  --}}
@include('shared.footeracs')
<script src="{{ mix('js/app.js') }}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
</body>
</html>
