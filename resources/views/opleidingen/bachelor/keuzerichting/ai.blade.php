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

{{--Testimonials--}}
@section('testimonial_1')
    I adore the ambiance at college. Every single person I come across is so passionate and driven. The school itself is
    very innovative and always on the go to make arrangement. Everything is always running smoothly. The IT Factory is a
    perfect choice!
@endsection
@section('naam_1')
    Babette Geerkens - 3 APP
@endsection
@section('foto_1')
    <li data-target="#quote-carousel" data-slide-to="0" class="active"><img
            class="img-fluid"
            src="/assets/img/testimonials/babette.jpg"
            alt="Babette Geerkens">
    </li>
@endsection

@section("CI-2")
    class="carousel-item"
@endsection
@section('testimonial_2')
    I visited IT Factory and they provided me elaborate information regarding the Computer Science course. I had
    various conversations with lecturers
    of the IT Factory and thereafter paid a visit to the open day of Thomas More. That was the day I made my final
    decision and decided to enroll myself into this course
@endsection
@section('naam_2')
    Mattia Andronico - Alumnus
@endsection
@section('foto_2')
    <li data-target="#quote-carousel" data-slide-to="1"><img
            class="img-fluid"
            src="/assets/img/testimonials/mattia.jpg"
            alt="Mattia Andronico">
    </li>
@endsection

@section("CI-3")
    class="carousel-item"
@endsection
@section('testimonial_3')
    Thomas More never disappoints, de keuze voor AI des te minder! Ik ben altijd al geboeid geweest door de koers en het
    mooie is je weet nooit wie wint, of toch wel? In deze boeiende en uitdagende richting leer jij hoe je zelf een model
    kan bouwen en trainen dat voorspelt wie de koers zal winnen. Zalig toch!
@endsection
@section('naam_3')
    Matthias Thijsen - 2 AI
@endsection
@section('foto_3')
    <li data-target="#quote-carousel" data-slide-to="2"><img
            class="img-fluid"
            src="/assets/img/testimonials/matthias.jpg"
            alt="Matthias Thijsen">
    </li>
@endsection

@section("CI-4")
    class="carousel-item"
@endsection
@section('testimonial_4')
    De stereotypische introverte IT'er, die op zijn bureau in zijn eentje programmeert, is al lang passé. Tegenwoordig
    wordt er van je verwacht dat je professioneel kan handelen en over voldoende soft skills beschikt. Daarom ben ik
    blij met de projecten op onze school zelf of bij onze partnerbedrijven.
@endsection
@section('naam_4')
    Niels Baptist - 2 AI
@endsection
@section('foto_4')
    <li data-target="#quote-carousel" data-slide-to="3"><img
            class="img-fluid"
            src="/assets/img/testimonials/niels_baptist.jpg"
            alt="Niels">
    </li>
@endsection

@section("CI-5")
    style="display:none"
@endsection
{{--@section('testimonial_5')--}}
{{--    text--}}
{{--@endsection--}}
{{--@section('naam_5')--}}
{{--    Niels Baptist - 2 AI--}}
{{--@endsection--}}
{{--@section('foto_5')--}}
{{--    <li data-target="#quote-carousel" data-slide-to="4"><img--}}
{{--            class="img-fluid"--}}
{{--            src="/assets/img/testimonials/niels_baptist.jpg"--}}
{{--            alt="Niels">--}}
{{--    </li>--}}
{{--@endsection--}}

@section("CI-6")
    style="display:none"
@endsection
{{--@section('testimonial_6')--}}
{{--    IT Factory the place to be. Hier krijg je veel toffe vakken van programmeren tot embedded devices. Naast de--}}
{{--    interessante lessen krijg je ook vele kansen om jezelf uit te dagen. Dit kan gaan van verschillende hackathons tot--}}
{{--    leuk project werk met klasgenoten. De IT Factory is een superleuke opleiding en zeker een aanrader!--}}
{{--@endsection--}}
{{--@section('naam_6')--}}
{{--    Thiemo Cumps – 2 IOT--}}
{{--@endsection--}}
{{--@section('foto_6')--}}
{{--    <li data-target="#quote-carousel" data-slide-to="5"><img--}}
{{--            class="img-fluid"--}}
{{--            src="/assets/img/testimonials/anonym.jpg"--}}
{{--            alt="Thiemo Cumps">--}}
{{--    </li>--}}
{{--@endsection--}}

{{--Projecten--}}
{{--Project 1--}}
@section('foto_project_1')
    <img class="img-fluid" src="/assets/img/portfolio/ha_patientzero1.jpg" alt="Patient Zero"/>
@endsection
@section('titel_project_1')
    <div class="portfolio-caption-heading">‘Patient Zero’</div>
@endsection

@section('inhoud_titel_1')
    <h2 class="text-uppercase">Hackathon, Artificial Intelligence</h2>
@endsection

@section('inhoud_tag_1')
    <p class="item-intro text-muted">Hackathon, Artificial Intelligence</p>
@endsection

@section('inhoud_foto_1')
    <img class="img-fluid d-block mx-auto"
         src="/assets/img/portfolio/ha_patientzero2.jpg"
         alt="Patient Zero"/>
@endsection

@section('inhoud_tekst_1')
    <p>De opdracht kon niet meer visionair zijn. Tussen 30 januari en 1 Februari
        2020 deed een groep 1ITF studenten mee aan de hackathon Patiënt zero. De
        opdracht: zoek online naar datasets over ziektes en verspreidingspatronen en
        tracht te achterhalen waar de ziekte uiteindelijk begonnen is. Gezien de
        huidige corona pandemie kon dit geen actuelere opdracht zijn... </p>
    <p>Hoewel de technologie nieuw was, was het team eerstejaars toch sterk genoeg
        om een mooie 2de plaats in de wacht te slepen!</p>
@endsection

@section('inhoud_link_1')
@endsection

@section('actief_project_2')
    style="display:none;"
@endsection

@section('actief_project_3')
    style="display:none;"
@endsection

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
