<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    @include('shared.icons')
    <title>@yield('title', 'IT Factory | Cloud & Cyber Security')</title>
</head>
<body>

@extends('opleidingen.bachelor.layouts.template_keuzerichting')

@section('banner')
    <div class="bannerKeuzerichting"></div>
    <style>.bannerKeuzerichting {
            padding: 10rem 0;
            background: linear-gradient(to bottom, rgba(22, 22, 22, .1) 0, rgba(22, 22, 22, .5) 75%, #161616 100%), url(../assets/img/banner_ccs.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }</style>
@endsection

@section('titelPagina')
    Cloud & Cyber Security
@endsection

@section('inhoud_over')
    <span style="font-weight:bold;">@yield('invoeging_wes')</span>
    Gebeten door security en wil je hackers geen kans geven? Dan zit je bij ons afstudeertraject Cloud & Cyber security
    op de juiste plek. Al doende leren we je door middel van veel praktijkvakken en toffe projecten het laatste nieuwe
    in de wereld van de netwerken, cloudapplicaties, privacy en cyber security. <br><br>
    In je eerste jaar krijg je een goede blik op de verschillende domeinen van de IT. Vanaf je tweede jaar begint
    vervolgens je reis door de wondere wereld van netwerken en security. Topics als firewall technology, datacenter
    technology, Devops, cybersecurity en hacking gaan na je opleiding geen geheimen meer hebben. <br><br>
    Na je opleiding heb je verschillende keuzes. Of je bent binnen de kortste keren aan de slag als System Engineer,
    Operations manager of misschien wel Cyber Security consultant. Er is keuze genoeg! Als je toch wil verder studeren,
    dan kan je altijd nog verder studeren voor onder meer een masterdiploma. Onder meer Industriële Wetenschappen of
    Information Management behoren tot de mogelijkheden. <br><br>
    Wil je graag meer weten over deze afstudeerrichting? <a target="_blank"
                                                            href="https://www.thomasmore.be/opleidingen/professionele-bachelor/elektronica-ict/cloud-and-cybersecurity">Kijk
        dan hier voor meer info</a>.

@endsection
@section('extra_over')
    <img src="/assets/img/pic_ccs.jpg" alt="over ons" class="responsive groot_scherm">
@endsection

@section('promofilm_keuzerichting')
    <iframe id="discord" class="centerYoutube" width="100%" height="650px"
            src="https://www.youtube.com/embed/m2cdW5bh-BA" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
@endsection

{{--Getuigenissen--}}
{{--Projecten--}}
@section('filter')ccs @endsection

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
