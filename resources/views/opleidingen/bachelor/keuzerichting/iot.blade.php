<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    @include('shared.icons')
    <title>@yield('title', 'IT Factory | Internet of Things')</title>
</head>
<body>

@extends('opleidingen.bachelor.layouts.template_keuzerichting')

@section('banner')
    <div class="bannerKeuzerichting"></div>
    <style>.bannerKeuzerichting {
            padding: 10rem 0;
            background: linear-gradient(to bottom, rgba(22, 22, 22, .1) 0, rgba(22, 22, 22, .5) 75%, #161616 100%), url(../assets/img/banner_iot.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }</style>
@endsection

@section('titelPagina')
    Internet Of Things
@endsection

@section('inhoud_over')
    Combineer je graag elektronica met IT? Dan is de afstudeerrichting Internet of Things echt je ding! Ga aan de slag
    met elektronische componenten en leer onder meer al doende hoe je een smart home installeert! <br><br>
    Werken met elektronica houdt in dat je ook een goede kennis van netwerken hebt en van programmeren. Daarom dat in je
    eerste jaar de basis van deze verschillende IT-disciplines wordt aangeleerd. Eens deze basis gelegd start de
    ontdekkingsreis binnen de wereld van de embedded devices en software driven IoT. <br><br>
    Technologieën als Smart Home Automation, Embedded Interfacing en programmable IoT devices zijn na je studie geen
    mysterie meer. <br><br>
    Je opleiding succesvol afgerond? Dan kan je direct aan de slag als embedded software engineer, smart home app
    developer of IoT engineer. Toch nog zin om verder te studeren? Dan kan je eventueel een extra bachelor of een
    masterdiploma behalen. Zo ligt de master Industriële Wetenschappen of Information Management zeker binnen de
    mogelijkheden. <br><br>
    Wil je graag meer weten over deze afstudeerrichting? <a target="_blank"
                                                            href="https://www.thomasmore.be/opleidingen/professionele-bachelor/elektronica-ict/internet-things">Kijk
        dan hier voor meer info</a>.

@endsection
@section('extra_over')
    <img src="/assets/img/pic_iot.jpg" alt="over ons" class="responsive groot_scherm">
@endsection

@section('promofilm_keuzerichting')
    <iframe id="discord" class="centerYoutube" width="100%" height="650px"
            src="https://www.youtube.com/embed/aAWLZi2LapY" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
@endsection

{{--Getuigenissen--}}
{{--Projecten--}}
@section('filter')iot @endsection

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
