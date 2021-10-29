<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    @include('shared.icons')
    <title>@yield('title', 'ITF Website')</title>
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigation')
{{--@include('opleidingen.graduaat.shared.navigation-bachelor')--}}
{{--@include('opleidingen.werkenEnStuderen.shared.navigation-bachelor')--}}
{{--@include('opleidingen.appliedComputerScience.shared.navigation-bachelor')--}}

<main class="container mt-3">
    @yield('main', 'page under construction...')
</main>
{{--  Footer  --}}
@include('shared.footer')
<script src="{{ mix('js/app.js') }}"></script>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
</body>
</html>


