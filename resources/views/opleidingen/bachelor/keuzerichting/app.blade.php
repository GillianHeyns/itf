<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    @include('shared.icons')
    <title>@yield('title', 'IT Factory | Application Development')</title>
</head>
<body>

@extends('opleidingen.bachelor.layouts.template_keuzerichting')

@section('banner')
    <div class="bannerKeuzerichting"></div>
    <style>.bannerKeuzerichting {
            padding: 10rem 0;
            background: linear-gradient(to bottom, rgba(22, 22, 22, .1) 0, rgba(22, 22, 22, .5) 75%, #161616 100%), url(../assets/img/banner_app.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }</style>
@endsection

@section('titelPagina')
    Application Development
@endsection

@section('inhoud_over')
    <span style="font-weight:bold;">@yield('invoeging_wes')</span>
    Werk je graag mee aan de next-level apps of is bijvoorbeeld augmented reality echt iets voor jou? Lees dan zeker
    verder over ons afstudeertraject Application Development. Door een mix van les- en praktijkmomenten leren we in een
    wip de laatste trends op vlak van software en application development. <br><br>
    Je start je reis door het IT-landschap met een verkenning van de verschillende disciplines die IT rijk is. Zo komt
    onder meer netwerken, smart devices, data crunching en een solide basis programmeerskills aan bod.
    Vanaf je tweede jaar verdiep je je volledig in de wereld van de App development door het aanleren van verschillende
    talen. Op het programma staan onder meer Python, Java, PHP, .NET, Angular en React. <br><br>
    Na je opleiding kan je alle kanten uit. Je kan quasi onmiddellijk aan de slag als developer bij een van de talloze
    IT-bedrijven in Vlaanderen. Nog niet gedaan met studeren? Dan kan je nog verder gaan voor een tweede bachelor of een
    masterdiploma! Onder meer een master Industriële Wetenschappen of Toegepaste Informatica behoren tot de
    mogelijkheden. <br><br>
    Wil je graag meer weten over deze afstudeerrichting? <a target="_blank"
                                                            href="https://www.thomasmore.be/opleidingen/professionele-bachelor/toegepaste-informatica/application-development">Kijk
        dan hier voor meer info</a>.

@endsection
@section('extra_over')
    <img src="/assets/img/pic_app.jpg" alt="over ons" class="responsive groot_scherm">
@endsection

@section('promofilm_keuzerichting')
    <iframe id="discord" class="centerYoutube" width="100%" height="650px"
            src="https://www.youtube.com/embed/9kBBdq25Hjk" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
@endsection

{{--Getuigenissen--}}
{{--Projecten--}}
@section('filter')app @endsection

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
