<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    @include('shared.icons')
    <title>@yield('title', 'IT Factory | Faciliteiten')</title>
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigation')

<section id="faciliteiten" class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>Studentenvoorzieningen</h2>
            <p>Stuvo</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 content">

                <p>Stuvo is jouw buddy voor een geslaagd studentenleven! De dienst Studenten- voorzieningen helpt jou bij
                    al jouw vragen rond</p>
                <ul>
                    <li><i class="far fa-check-circle"></i> Centen voor studenten</li>
                    <li><i class="far fa-check-circle"></i> Veerkrachtig studeren</li>
                    <li><i class="far fa-check-circle"></i> Vervoer</li>
                    <li><i class="far fa-check-circle"></i> Op kot gaan</li>
                </ul>
                <p>Zit je met
                    wat zorgen en zoek je een luisterend oor? De studentenbegeleiders staan voor je klaar, gratis en met
                    beroepsgeheim.</p>
                <p>Eerder zin om wat plezier te hebben op en rond jouw campus? Stuvo organiseert een
                    heleboel sportieve en culturele activiteiten voor jou. Je kan ook zelf iets organiseren en hiervoor
                    korting vragen.</p>
                <p>Meer info kan je altijd vragen aan <a href="mailto:stuvo@thomasmore.be">stuvo@thomasmore.be</a></p>
            </div>
            <div class="col-sm-12 col-md-6 ">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tlxKsBJ-oKw" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<section id="faciliteiten" class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>Zorgcoördinatie</h2>
            <p>Studeren op maat</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img src="assets/img/faciliteiten/zorg.jpg" id="afstandFoto" width="500px" height="auto" alt="zorgcoördinatie" class="responsive groot_scherm">
            </div>
            <div class="col-sm-12 col-md-6 content">
                <p>Om iedereen evenveel kansen te geven op een succesvolle studie, kunnen sommige studenten faciliteiten
                    krijgen voor hun lessen, stages of examens. We denken daarbij aan topsporters, studenten met een
                    leerstoornis of een functiebeperking, kunstenaars, anderstaligen en student-ondernemers. We bekijken
                    per student wat er nodig en mogelijk is.</p>
                <p>Je contactpersoon is de zorgcoördinator van je opleiding. Hij of zij nodigt je uit voor een kort
                    gesprek. Jij weet uiteindelijk het best welke hulpmiddelen of aanpassingen je nodig hebt. Op basis
                    daarvan werken we een plan uit en sturen we dat desnoods bij tijdens je opleiding.</p>
                <p>De procedure en de voorwaarden verschillen naargelang de reden waarvoor je een faciliteit aanvraagt.
                    Als je meer informatie wil, of als je een melding wilt maken, dan kan je op de pagina van je
                    opleiding de contactgegevens van de zorgcoördinator vinden.</p>
                <p>Meer info: <a href="https://thomasmore365.sharepoint.com/sites/s.itfactory/SitePages/Studeren-op-maat.aspx" target="_blank">Studeren op maat</a></p>
            </div>
        </div>
    </div>
</section>
<section id="faciliteiten" class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>Studentenvereniging</h2>
            <p>EMT</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 content">
                <p>Wij zijn EMT, de Geelse studentenvereniging die de studenten van de unit technologie aan Thomas More
                    Kempen vertegenwoordigt. We zijn een actieve groep studenten die zich inzet voor een aangename sfeer in
                    en rond de campus.</p>
                <p>EMT staat vooral gekend om zijn TD’s, maar wij zijn veel meer. Wij proberen ervoor te
                    zorgen dat al onze leden met plezier kunnen terugkijken op hun studententijd. Dit doen we door
                    verschillende activiteiten te organiseren (TD’s, cantussen, café-avonden, sport- en cultuuruitstappen...)
                    en elkaar te ondersteunen in de studies.</p>
                <p>Indien je graag wil opgenomen worden in het echte studentenleven raden wij je aan om je te laten
                    ‘dopen’ bij ons. Dit is niet verplicht wanneer je een Atomoskaart koopt, maar dit geeft je
                    studentenleven een grote boost. Je smeedt vriendschappen voor het leven, je kan bij iedereen terecht
                    met vragen over je studie, kot.. en je krijgt toegang tot het professionele netwerk dat EMT
                    doorheen de jaren heeft opgebouwd.</p>

                <p>Indien je benieuwd bent naar wie wij zijn kan je ons altijd terug vinden op:</p>
                <ul>
                    <li><i class="far fa-check-circle"></i><a href="https://www.facebook.com/StudentenverenigingEMT" target="_blank"> Onze Facebookpagina</a></li>
                    <li><i class="far fa-check-circle"></i><a href="https://www.trooper.be/nl/trooperverenigingen/emt-atomos" target="_blank"> Steun ons op Trooper (volledig gratis)</a></li>
                </ul>
                <p>Ut vivat, crescat et floreat EMT!</p>
            </div>
            <div class="col-sm-12 col-md-6">
                <img src="assets/img/faciliteiten/emt.png" width="500px" height="auto" alt="EMT" class="responsive groot_scherm">
            </div>
        </div>
    </div>
</section>
{{--  Footer  --}}
@include('shared.footer')
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
