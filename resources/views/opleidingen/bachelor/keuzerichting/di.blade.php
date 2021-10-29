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

{{--Testimonials--}}
@section('testimonial_1')
    In de afstudeerrichting Digital Innovation krijgen we heel veel mogelijkheden om samen te werken met verschillende
    IT-bedrijven en partners. Zo leren we de jobs al een beetje kennen waardoor we later zeker weten wat we willen doen.
@endsection
@section('naam_1')
    Gillian Heyns - 2 DI
@endsection
@section('foto_1')
    <li data-target="#quote-carousel" data-slide-to="0" class="active"><img
            class="img-fluid"
            src="/assets/img/testimonials/gillian.jpg"
            alt="Gillian Heyns">
    </li>
@endsection

@section("CI-2")
    class="carousel-item"
@endsection
@section('testimonial_2')
    Als student met functie beperking was een hoge school geen makkelijke keuze. De ITFactory was mijn keuze en hier heb
    ik nooit spijt van gehad. Van dag één heb ik alle nodige hulp gekregen van medestudenten en docenten om het voor mij
    zo aangenaam mogelijk te maken!
@endsection
@section('naam_2')
    Axl Kesters - 2 DI
@endsection
@section('foto_2')
    <li data-target="#quote-carousel" data-slide-to="1"><img
            class="img-fluid"
            src="/assets/img/testimonials/axl.jpg"
            alt="Axl Kesters">
    </li>
@endsection

@section("CI-3")
    class="carousel-item"
@endsection
@section('testimonial_3')
    Digital Innovation is dé richting voor mensen die graag projectmatig bijleren. Je hebt zelf de keuze waar je je
    focus legt, zowel bij de vakken die je volgt als de projecten die je doet gedurende het semester. Heb je een
    hands-on-mentaliteit? Overweeg dan zeker deze richting!
@endsection
@section('naam_3')
    Jonas Van Hove - 2 DI
@endsection
@section('foto_3')
    <li data-target="#quote-carousel" data-slide-to="2"><img
            class="img-fluid"
            src="/assets/img/testimonials/jonas.jpg"
            alt="Jonas Van Hove">
    </li>
@endsection

@section("CI-4")
    class="carousel-item"
@endsection
@section('testimonial_4')
    DI laat me toe om als student met een brede interesse in IT toch vakken van de verschillende
    richtingen te volgen. Via het projectwerk leer ik ook alle stappen kennen die een project doorloopt, vanaf het
    opstellen van de verwachting van de klant tot oplevering van het eindresultaat. Het uitwerken van projecten heeft me
    ook al toegelaten om contacten te leggen binnen de bedrijfswereld. Een echte aanrader dus voor degene die al eens
    willen proeven hoe het er aan toe gaat in het echte bedrijfsleven.
@endsection
@section('naam_4')
    Tobias Geyskens - 2 DI
@endsection
@section('foto_4')
    <li data-target="#quote-carousel" data-slide-to="3"><img
            class="img-fluid"
            src="/assets/img/testimonials/tobias.jpg"
            alt="Tobias Geyskens">
    </li>
@endsection

@section("CI-5")
    style="display: none;"
@endsection

@section("CI-6")
    style="display:none"
@endsection

{{--Projecten--}}
{{--Project 1--}}
@section('foto_project_1')
    <img class="img-fluid" src="/assets/img/portfolio/di_datacenterautomatisation1.jpg" alt="Datacenter automatisation"/>
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
    <img class="img-fluid" src="/assets/img/portfolio/di_projectportaal1.jpg" alt="DI project portaal"/>
@endsection

@section('titel_project_2')
    <div class="portfolio-caption-heading">Digital Innovation Project Portaal</div>
@endsection


@section('inhoud_titel_2')
    <h2 class="text-uppercase">Digital Innovation Project Portaal</h2>
@endsection

@section('inhoud_tag_2')
    <p class="item-intro text-muted">Digital Innovation</p>
@endsection

@section('inhoud_foto_2')
    <img class="img-fluid d-block mx-auto"
         src="/assets/img/portfolio/di_projectportaal2.jpg" alt="DI project portaal"/>
@endsection

@section('inhoud_tekst_2')
    <p>Studenten Thibault en Yannick kregen van hun docent Digital Innovation de
        opdracht een portaalapp te ontwikkelen om bedrijven en studenten aan elkaar
        te koppelen.</p>
    <p>Ze kozen om de app te maken in Angular met een NodeJS backend. De studenten
        namen ook de hele projectbegeleiding voor hun rekening. Zelfstandigheid,
        nieuwe technologieën en een goede samenwerking overheerste in dit
        project. </p>
    <p>Een mooi project dat de komende jaren veel gebruikt gaat worden! </p>
@endsection

@section('inhoud_link_2')

@endsection



{{--Project 3--}}
@section('foto_project_3')
    <img class="img-fluid" src="/assets/img/portfolio/di_websiteitfactory1.jpg" alt="website IT Factory"/>
@endsection
@section('titel_project_3')
    <div class="portfolio-caption-heading">Website IT Factory</div>
@endsection

@section('inhoud_titel_3')
    <h2 class="text-uppercase">Website IT Factory</h2>
@endsection

@section('inhoud_tag_3')
    <p class="item-intro text-muted">Digital Innovation, Application development</p>
@endsection

@section('inhoud_foto_3')
    <img class="img-fluid d-block mx-auto"
         src="/assets/img/portfolio/di_websiteitfactory1.jpg" alt="Website IT Factory"/>
@endsection

@section('inhoud_tekst_3')
    <p>Studenten Digital Innovation kregen de opdracht om op 3 weken tijd een
        volledig nieuwe website te ontwikkelen. De opdracht was niet enkel om een
        website te bouwen maar ook om nieuwe zaken bij te leren. Zo leerden ze onder
        andere werken met Laravel, php, jquery,… Daarnaast zijn ze nog volop bezig
        om een bot te installeren die ze later kunnen gebruiken in de website. </p>
@endsection

@section('inhoud_link_3')
    <li><a href="/" target="_blank">www.weareitfactory.be</a>
    </li>
@endsection

{{--@section('testimonial_5')--}}
{{--    Digital Innovation is dé richting voor mensen die graag projectmatig bijleren. Je hebt zelf de keuze waar je je--}}
{{--    focus legt, zowel bij de vakken die je volgt als de projecten die je doet gedurende het semester. Heb je een--}}
{{--    hands-on-mentaliteit? Overweeg dan zeker deze richting!--}}
{{--@endsection--}}
{{--@section('naam_5')--}}
{{--    Jonas Van Hove - 2 DI--}}
{{--@endsection--}}
{{--@section('foto_5')--}}
{{--    <li data-target="#quote-carousel" data-slide-to="4"><img--}}
{{--            class="img-fluid"--}}
{{--            src="/assets/img/testimonials/jonas.jpg"--}}
{{--            alt="Jonas Van Hove">--}}
{{--    </li>--}}
{{--@endsection--}}

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
