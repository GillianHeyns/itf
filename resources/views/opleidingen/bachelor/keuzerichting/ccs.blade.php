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

{{--Testimonials--}}
@section('testimonial_1')
    Sinds de eerste dagen in de ITfactory voel ik me hier al welkom, het is meer dan een studierichting. Het is een
    vriendengroep, een leergroep en na de schooluren zelfs je game groep. Binnen de ITfactory ben je niet 1 van de vele
    studenten, je bent jezelf, je word herkend & erkend.
@endsection
@section('naam_1')
    Alex Coulon - 2 CCS
@endsection
@section('foto_1')
    <li data-target="#quote-carousel" data-slide-to="0" class="active"><img
            class="img-fluid"
            src="/assets/img/testimonials/alex.jpg"
            alt="Alex Coulon">
    </li>
@endsection

@section("CI-2")
    class="carousel-item"
@endsection
@section('testimonial_2')
    De IT-Factory is voor mij ideaal. Ik heb mezelf van dag 1 welkom gevoeld. De relatie student docent is super goed.
    We kunnen altijd terecht op discord voor technische en minder technische vragen. We kunnen altijd rekenen op student
    en docenten voor ondersteuning.
@endsection
@section('naam_2')
    Bram Geudens - 2 CCS
@endsection
@section('foto_2')
    <li data-target="#quote-carousel" data-slide-to="1"><img
            class="img-fluid"
            src="/assets/img/testimonials/bram_geudens.jpg"
            alt="Bram Geudens">
    </li>
@endsection

@section("CI-3")
    class="carousel-item"
@endsection
@section('testimonial_3')
    IT Factory is zeker aan te raden als je nog niet juist weet wat je wil doen: toegepaste informatica of
    Elektronica-ICT. Het heeft mij, samen met de ondersteuning van leraren, geholpen om de juiste keuze's te maken en
    een job te hebben die ik ook graag doe.
@endsection
@section('naam_3')
    Kaat Maes - Alumnus
@endsection
@section('foto_3')
    <li data-target="#quote-carousel" data-slide-to="2"><img
            class="img-fluid"
            src="/assets/img/testimonials/kaat.jpg"
            alt="Kaat Maes">
    </li>
@endsection

@section("CI-4")
    class="carousel-item"
@endsection
@section('testimonial_4')
    Ik heb zelf al veel kunnen doen met de kennis die we hebben gekregen uit onze lessen van CCS. Zoals hoe ik mijn
    eigen server, en op die server websites, kan hosten die overal en altijd bereikbaar is. Natuurlijk hebben we deze
    ook leren beveiligen en managen.
@endsection
@section('naam_4')
    Yannick Vandevenne – 2 CCS
@endsection
@section('foto_4')
    <li data-target="#quote-carousel" data-slide-to="3"><img
            class="img-fluid"
            src="/assets/img/testimonials/yannick.jpg"
            alt="Yannick Vandevenne">
    </li>
@endsection

@section("CI-5")
    style="display: none;"
@endsection
{{--@section('testimonial_5')--}}
{{--    Digital Innovation is dé richting voor mensen die graag projectmatig bijleren. Je hebt zelf de keuze waar je je--}}
{{--    focus legt, zowel bij de vakken die je volgt als de projecten die je doet gedurende het semester. Heb je een--}}
{{--    hands-on-mentaliteit? Overweeg dan zeker deze richting!--}}
{{--@endsection--}}
{{--@section('naam_5')--}}
{{--    Jonas Van Hove - 2 ITF DI--}}
{{--@endsection--}}
{{--@section('foto_5')--}}
{{--    <li data-target="#quote-carousel" data-slide-to="4"><img--}}
{{--            class="img-fluid"--}}
{{--            src="/assets/img/testimonials/jonas.jpg"--}}
{{--            alt="Jonas Van Hove">--}}
{{--    </li>--}}
{{--@endsection--}}

@section("CI-6")
    style="display:none"
@endsection


{{--Projecten--}}
{{--Project 1--}}
@section('foto_project_1')
    <img class="img-fluid" src="/assets/img/portfolio/di_datacenterautomatisation1.jpg"
         alt="Datacenter automatisation"/>
@endsection
@section('titel_project_1')
    <div class="portfolio-caption-heading">Datacenter automatisation</div>
@endsection

@section('inhoud_titel_1')
    <h2 class="text-uppercase">Datacenter automatisation</h2>
@endsection

@section('inhoud_tag_1')
    <p class="item-intro text-muted">Digital Innovation, Cloud & Cyber
        Security</p>
@endsection

@section('inhoud_foto_1')
    <img class="img-fluid d-block mx-auto"
         src="/assets/img/portfolio/di_datacenterautomatisation2.jpg" alt="Datacenter automatisation"/>
@endsection

@section('inhoud_tekst_1')
    <p>Een datacenter automatiseren, hoe begin je daaraan? 2ITF Student Wout mocht
        het uitzoeken voor een echte klant. Hij kreeg de volledige
        verantwoordelijkheid vanaf de projectplanning tot de uiteindelijke
        uitwerking.</p>
    <p>Een knappe uitwerking met onder meer een webapplicatie en Power Shell scripts
        zorgt ervoor dat de klant tegenwoordig in een paar minuten een container kan
        aanmaken op hun datacenter, waar dit vroeger al snel een paar uur in beslag
        nam! </p>
@endsection

@section('inhoud_link_1')

@endsection




{{--Project 2--}}
@section('foto_project_2')
    <img class="img-fluid" src="/assets/img/portfolio/ha_smartpolicinghackathon3.jpg" alt="smart policing hackathon"/>
@endsection

@section('titel_project_2')
    <div class="portfolio-caption-heading">Smart Policing – Smart Selection & Training</div>
@endsection


@section('inhoud_titel_2')
    <h2 class="text-uppercase">Smart Policing – Smart Selection & Training</h2>
@endsection

@section('inhoud_tag_2')
    <p class="item-intro text-muted">Hackathon, Cloud & Cyber Security</p>
@endsection

@section('inhoud_foto_2')
    <img class="img-fluid d-block mx-auto"
         src="/assets/img/portfolio/ha_smartpolicinghackathon4.jpg" alt="smart policing hackathon"/>
@endsection

@section('inhoud_tekst_2')
    <p>Hoe vind je de beste mensen voor de job ? Een team studenten uit 3ITF deed
        mee aan de Smart Policing hackathon en bedacht een online ‘Capture-the-flag’
        platform dat de Federal Computer Crime Unit kan gebruiken voor training en
        aanwerving van nieuwe krachten. </p>
    <p>Door een reeks van IT en Cyber Security gerelateerde puzzels te doorlopen
        kunnen medewerkers en potentiële kandidaten hun kennis demonstreren en
        aanscherpen. </p>
    <p>Smart recruitment in een online wereld!</p>
@endsection

@section('inhoud_link_2')
    <li><a href="https://fccu.sinners.be/"
           target="_blank">www.fccu.sinners.be</a></li>
@endsection



{{--Project 3--}}
@section('foto_project_3')
    <img class="img-fluid" src="/assets/img/portfolio/Keuzeproject_BroodSpelen_2.png"
         alt="Orientation Project 1: Lan-party"/>
@endsection
@section('titel_project_3')
    <div class="portfolio-caption-heading">Orientation Project 1: Lan-party</div>
@endsection

@section('inhoud_titel_3')
    <h2 class="text-uppercase">Orientation Project 1: Lan-party</h2>
@endsection

@section('inhoud_tag_3')
    <p class="item-intro text-muted">Cloud & Cyber Security</p>
@endsection

@section('inhoud_foto_3')
    <img class="img-fluid d-block mx-auto"
         src="/assets/img/portfolio/Keuzeproject_BroodSpelen_1.png" alt="Orientation Project 1: Lan-party"/>
@endsection

@section('inhoud_tekst_3')
    <p>Niet goed weten wat je later wil worden en toch komen studeren? Dat kan gewoon bij de IT Factory. Om tijdens het
        jaar toch te weten te komen welke job je later wil gaan doen, worden er tijdens het eerste jaar ‘Orientation
        Projects’ ingericht.</p>
    <p>Student Ward koos met zijn team al eerste project het Cloud and Cyber Security project ‘Lan Party’. Zij bouwden
        een netwerk om over verschillende klaslokalen te kunnen gamen met collega studenten.</p>
    <p>Een fijne afsluiter van een mooie week! </p>
@endsection

@section('inhoud_link_3')

@endsection

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
