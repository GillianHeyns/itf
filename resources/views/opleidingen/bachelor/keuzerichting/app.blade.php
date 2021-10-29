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

{{--Testimonials--}}
@section('testimonial_1')
    Vanaf dag 1 voelde ik mij direct thuis in de IT Factory. Het loopt er vol met leuke medestudenten en gemotiveerde
    docenten. Ik had geen voorkennis en toch was ik direct mee met de leerstof doordat de lessen goed gegeven worden.
    Ook de hele community die gevormd is op Discord is een groot pluspunt.
@endsection
@section('naam_1')
    Toon Staes – 2 APP
@endsection
@section('foto_1')
    <li data-target="#quote-carousel" data-slide-to="0" class="active"><img
            class="img-fluid"
            src="/assets/img/testimonials/toon.jpg"
            alt="Toon Staes">
    </li>
@endsection

@section("CI-2")
    class="carousel-item"
@endsection
@section('testimonial_2')
    De IT Factory is een ongelofelijke stimulerende richting. Bij het programmeren kan je van de opdrachten zelf een
    uitdaging maken, die je creatief moet oplossen. Het is ook geweldig om aangemoedigd te worden om op eigen initiatief
    deel te nemen aan wedstrijden en hackathons.
@endsection
@section('naam_2')
    Wilfer Spaepen – 2 APP
@endsection
@section('foto_2')
    <li data-target="#quote-carousel" data-slide-to="1"><img
            class="img-fluid"
            src="/assets/img/testimonials/wilfer.jpg"
            alt="Wilfer Spaepen">
    </li>
@endsection

@section("CI-3")
    class="carousel-item"
@endsection
@section('testimonial_3')
    Een Discord talk meenemen (of geven), of discussies over technologie; alles is welkom en mogelijk, waardoor ik zelfs
    nu na mijn studententijd trots ben om deel te nemen aan de ITF-community. De docenten zijn meer collega dan docent!
@endsection
@section('naam_3')
    Jorn Snoeks - Alumnus
@endsection
@section('foto_3')
    <li data-target="#quote-carousel" data-slide-to="2"><img
            class="img-fluid"
            src="/assets/img/testimonials/jorn.jpg"
            alt="Jorn Snoeks">
    </li>
@endsection

@section("CI-4")
    class="carousel-item"
@endsection
@section('testimonial_4')
    We leren met behulp van toffe projecten hoe je zelf verschillende apps kan maken. Als er iets niet goed lukt staat
    er ook altijd iemand klaar om te helpen, zowel leerkrachten als medestudenten. De hackathons zijn ook superleuk om
    aan mee te doen.
@endsection
@section('naam_4')
    Britt Ooms - 2 APP
@endsection
@section('foto_4')
    <li data-target="#quote-carousel" data-slide-to="3"><img
            class="img-fluid"
            src="/assets/img/testimonials/britt.jpg"
            alt="Britt Ooms">
    </li>
@endsection

@section("CI-5")
    class="carousel-item"
@endsection
@section('testimonial_5')
    Voor mij is de IT-Factory echt een top richting voor iedereen die graag meer wilt leren over alles IT gerelateerd.
    Ik persoonlijk volg de afstudeerrichting APP Development om dat ik wou leren over hoe een app of website gemaakt
    worden. De IT-Factory heeft toffe leerkrachten die altijd klaar staan om je met een probleem te helpen, ook heeft de
    IT-Factory een goed familiegevoel.
@endsection
@section('naam_5')
    Michiel Vandezande - 2 APP
@endsection
@section('foto_5')
    <li data-target="#quote-carousel" data-slide-to="4"><img
            class="img-fluid"
            src="/assets/img/testimonials/michiel.jpg"
            alt="Michiel Vandezande">
    </li>
@endsection

@section("CI-6")
    style="display:none"
@endsection

{{--Projecten--}}
{{--Project 1--}}
@section('foto_project_1')
    <img class="img-fluid" src="/assets/img/portfolio/app_webctrl1.jpg" alt="WebCtrl"/>
@endsection
@section('titel_project_1')
    <div class="portfolio-caption-heading">WebCtrl, Studentondernemer</div>
@endsection

@section('inhoud_titel_1')
    <h2 class="text-uppercase">WebCtrl, Student-ondernemer</h2>
@endsection

@section('inhoud_tag_1')
    <p class="item-intro text-muted">Student-ondernemer, Application Development</p>
@endsection

@section('inhoud_foto_1')
    <img class="img-fluid d-block mx-auto"
         src="/assets/img/portfolio/app_webctrl2.jpg" alt="WebCtrl"/>
@endsection

@section('inhoud_tekst_1')
    <p>Een studiecarrière combineren met een professionele carrière, niet voor
        iedereen weggelegd, maar 3ITF student Jelle waagde de sprong.</p>
    <p>Na het eerste jaar IT Factory besloot hij de leerstof om te zetten in de
        praktijk. Mede gemotiveerd door de business gerelateerde lessen uit het
        tweede jaar, besloot hij te starten als student-ondernemer. </p>
    <p>Door zijn kennis uit de IT Factory kon hij direct meerwaarde creëren voor
        echte bedrijven. Met zijn bedrijf WebCtrl helpt hij nu lokale bedrijven om
        hun online aanwezigheid te versterken door ondermeer websites en webshops te
        ontwikkelen. </p>
    <p>De sprong wagen tijdens je studies naar ondernemerschap? Jelle raadt het
        alvast iedereen aan! </p>
@endsection

@section('inhoud_link_1')
    <li><a href="https://webctrl.be/" target="_blank">Webctrl.be</a></li>
@endsection




{{--Project 2--}}
@section('foto_project_2')
    <img class="img-fluid" src="/assets/img/portfolio/ICEConnect_1.png" alt="ICE connect"/>
@endsection

@section('titel_project_2')
    <div class="portfolio-caption-heading">Cordova - ICE Connect app</div>
@endsection


@section('inhoud_titel_2')
    <h2 class="text-uppercase">Cordova - ICE Connect</h2>
@endsection

@section('inhoud_tag_2')
    <p class="item-intro text-muted">Application Development</p>
@endsection

@section('inhoud_foto_2')
    <img class="img-fluid d-block mx-auto"
         src="/assets/img/portfolio/ICEConnect_2.png" alt="ICE Connect"/>
@endsection

@section('inhoud_tekst_2')
    <p>Mensen met elkaar in contact brengen, een nobel gebaar.</p>
    <p>Student Ward koos ervoor om zijn 2ITF Cordova project te kaderen rond connecties leggen. Hij ontwikkelde een app om mensen samen te brengen en om bij te houden met wie je allemaal contact gehad hebt. </p>
    <p>Hij slaagde er zelfs in zijn app te publiceren op de Play Store. Geïnteresseerd? Zoek naar ICE Connect app! </p>
@endsection

@section('inhoud_link_2')

@endsection



{{--Project 3--}}
@section('foto_project_3')
    <img class="img-fluid" src="/assets/img/portfolio/Mobile_Dev_1.png" alt="Het museum"/>
@endsection
@section('titel_project_3')
    <div class="portfolio-caption-heading">Mobile Development - Het Museum</div>
@endsection

@section('inhoud_titel_3')
    <h2 class="text-uppercase">Mobile development - Het Museum</h2>
@endsection

@section('inhoud_tag_3')
    <p class="item-intro text-muted">Application Development, Student-ondernemer</p>
@endsection

@section('inhoud_foto_3')
    <img class="img-fluid d-block mx-auto"
         src="/assets/img/portfolio/Mobile_Dev_2.png" alt="Mobile Development"/>
@endsection

@section('inhoud_tekst_3')
    <p>Een museumbezoek interessant maken, geen simpele opdracht. Toch namen studenten Tom en Ward de opdracht aan voor het 3ITF vak ‘Mobile Development’.  </p>
    <p>Ze gebruikten Flutter, Augmented Reality en Image Recognition om schilderijen tot leven te laten komen en hun verhaal te laten vertellen.</p>
    <p>Een museum bezoeken werd ineens een heel pak leuker! </p>
@endsection

@section('inhoud_link_3')
    <li><a href="/assets/img/portfolio/Mobile_Dev_3.mp4" target="_blank">Demo</a>
    </li>
@endsection
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
