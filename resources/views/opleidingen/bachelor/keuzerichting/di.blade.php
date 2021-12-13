<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    @include('shared.icons')
    <title>@yield('title', 'IT Factory | Digital Innovation')</title>
</head>
<body>

@extends('opleidingen.bachelor.layouts.template_keuzerichting')

@section('banner')
    <div class="bannerKeuzerichting"></div>
    <style>.bannerKeuzerichting {
            padding: 10rem 0;
            background: linear-gradient(to bottom, rgba(22, 22, 22, .1) 0, rgba(22, 22, 22, .5) 75%, #161616 100%), url(../assets/img/banner_di.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }</style>
@endsection

@section('titelPagina')
    Digital Innovation
@endsection

@section('inhoud_over')
    Het klassieke traject niks voor jou? Dan is misschien de afstudeerrichting Digital Innovation iets voor jou. Door
    het uitvoeren van projecten voor echte klanten leer je de IT-skills die je nodig hebt in je latere carrière. <br>
    <br>
    In je eerste jaar start je in het normale traject en leer je de essentie van de verschillende afstudeerrichtingen.
    Zo heb je een goede kennis van netwerken, programmeren, smart devices en data queries om het tweede jaar aan te
    vatten. <br><br>
    Vanaf je tweede jaar start je met een combinatie van projecten en vakken om je kennis uit te breiden. De projecten
    die je aanvat zijn voor een echte klant en zijn je eigen keuze. Zo wordt je interesse extra geprikkeld. Onder
    begeleiding van een docent breng je zo je eerste projecten tot een goed einde. Je overige tijd vul je op met vakken
    uit het totale aanbod. Wil je een vak volgen uit de IoT-richting, gecombineerd met 2 uit de APP-richting? Geen
    probleem! <br><br>
    Je laatste jaar is tenslotte enkel projectwerk en waardoor je volop je eigen richting kan uitgaan en zelfs jezelf
    kan scholen in technologieën die niet in het reguliere traject aangeboden worden! <br><br>
    Doordat je gewend bent met klanten om te gaan vind je binnen de kortste keren werk bij een van de talloze
    IT-bedrijven in Vlaanderen. Toch nog zin in een extra diploma? Dan kan je nog verder studeren voor een extra
    bachelor of masterdiploma. Onder meer een master Industriële Wetenschappen of Toegepaste Informatica ligt binnen de
    mogelijkheden. <br><br>
    Wil je graag meer weten over deze afstudeerrichting? <a target="_blank"
                                                            href="https://www.thomasmore.be/opleidingen/professionele-bachelor/toegepaste-informatica/digital-innovation">Kijk
        dan hier voor meer info</a>.

@endsection
@section('extra_over')
    <img src="/assets/img/pic_di.jpg" alt="over ons" style="width: 100%" class="responsive groot_scherm">
@endsection

@section('promofilm_keuzerichting')
    <iframe id="discord" class="centerYoutube" width="100%" height="650px"
            src="https://www.youtube.com/embed/JCXJ9JYjtTo" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
@endsection

{{--Getuigenissen--}}
{{--Projecten--}}
@section('filter')di @endsection

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
