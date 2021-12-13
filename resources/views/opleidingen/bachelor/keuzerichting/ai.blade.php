<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    @include('shared.icons')
    <title>@yield('title', 'IT Factory | Artificial Intelligence')</title>
</head>
<body>

@extends('opleidingen.bachelor.layouts.template_keuzerichting')

@section('banner')
    <div class="bannerKeuzerichting"></div>
    <style>.bannerKeuzerichting {
            padding: 10rem 0;
            background: linear-gradient(to bottom, rgba(22, 22, 22, .1) 0, rgba(22, 22, 22, .5) 75%, #161616 100%), url(../assets/img/banner_ai.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }</style>
@endsection

@section('titelPagina')
    Artificial Intelligence
@endsection

@section('inhoud_over')
    Artificiële Intelligentie? Hoe werkt dat en wat kan ik er allemaal mee? Als die vragen jou wakker houden dan is onze
    afstudeerrichting iets voor jou! Al doende leren verkennen we samen met jou de wondere wereld van deze booming
    revolutie in het IT-landschap. <br><br>
    Werken met Artificiële Intelligentie vereist een brede basiskennis van het IT-landschap. Daarom dat we in het eerste
    jaar de essentie ontdekken van onder meer programmeren, netwerken, smart devices en data queries.
    Vanaf het tweede jaar worden je programmeerskills verder aangescherpt, want AI, da’s een hoop programmeren! Python,
    PHP, .NET en Java, je ziet ze allemaal. Eens je een goede kennis hebt van het programmeren is het tijd voor de
    wondere wereld van de AI. <br>
    Je leert Data Science, Business Intelligence, Big Data, AI, Data Engineering en nog zo veel meer, zodat je als
    professional aan de slag kan! <br><br>
    Werk vinden? Een fluitje van een cent aangezien AI-profielen veel gezocht zijn. Toch nog zin om enkele jaartjes
    verder te studeren? Dan kan je nog een extra bachelor of een master halen. Onder meer een master Information
    Management of Toegepaste Informatica ligt binnen de mogelijkheden. <br><br>
    Wil je graag meer weten over deze afstudeerrichting? <a target="_blank"
                                                            href="https://www.thomasmore.be/opleidingen/professionele-bachelor/toegepaste-informatica/artificial-intelligence">Kijk
        dan hier voor meer info</a>.

@endsection
@section('extra_over')
    <img src="/assets/img/pic_ai.jpg" alt="over ons" class="responsive groot_scherm">
@endsection

@section('promofilm_keuzerichting')
    <iframe id="discord" class="centerYoutube" width="100%" height="650px"
            src="https://www.youtube.com/embed/UyEz4oa83Zs" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
@endsection

{{--Getuigenissen--}}
{{--Projecten--}}
@section('filter')ai @endsection

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
