<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titel');
            $table->longText('beschrijving')->nullable();
            $table->string('hyperlink')->nullable();
            $table->string('hyperlink_naam')->nullable();
//            $table->foreignId('content_block_id');
//            $table->foreign('content_block_id')->references('id')->on('content_blocks')->onDelete('cascade')->onUpdate('cascade');
        });

        // Insert some projects (inside the up-function!)
        DB::table('projects')->insert(
            [
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Website IT Factory',
                    'beschrijving' => 'Studenten Digital Innovation kregen de opdracht om op 3 weken tijd een volledig nieuwe website te ontwikkelen. De opdracht was niet enkel om een website te bouwen maar ook om nieuwe zaken bij te leren. Zo leerden ze onder andere werken met Laravel, php, jquery,… Daarnaast zijn ze nog volop bezig om een bot te installeren die ze later kunnen gebruiken in de website.',
                    'hyperlink' => '/',
                    'hyperlink_naam' => 'www.weareitfactory.be',
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Too-Gather afvalsorteermachine',
                    'beschrijving' => 'We kregen via de Efteling de opdracht om een afvalscheidingstechniek te ontwikkelen voor Holle Bolle Gijs. Deze opdracht is in het kader van een wedstrijd en in samenwerking met ICE Cube, het beste prototype wordt werkelijk uitgevoerd in het pretpark.

Het afval komt langs de mond van Holle Bolle Gijs binnen en het valt op een transportband. daarna detecteert een sensor het afval en wordt er een foto gemaakt en naar de cloud gestuurd. Het afval wordt herkend, en het sorteermechanisme gaat het afval in de juiste afvalcontainer deponeren.',
                    'hyperlink' => 'https://youtu.be/cR5753F4i8E',
                    'hyperlink_naam' => 'YouTube demo'
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'GitLab for KCE',
                    'beschrijving' => 'De studenten van Digital Innovation kregen de opdracht een GitLab op te zetten voor KCE. Dit zou de werking van hun project ten goede komen.',
                    'hyperlink' => '',
                    'hyperlink_naam' => ''
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Patient Zero',
                    'beschrijving' => 'De opdracht kon niet meer visionair zijn. Tussen 30 januari en 1 Februari 2020 deed een groep 1ITF studenten mee aan de hackathon Patiënt zero. De opdracht: zoek online naar datasets over ziektes en verspreidingspatronen en tracht te achterhalen waar de ziekte uiteindelijk begonnen is. Gezien de huidige corona pandemie kon dit geen actuelere opdracht zijn...

Hoewel de technologie nieuw was, was het team eerstejaars toch sterk genoeg om een mooie 2de plaats in de wacht te slepen!',
                    'hyperlink' => '',
                    'hyperlink_naam' => ''
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Smart Policing – Smart Interaction',
                    'beschrijving' => 'Hoe brengen we de politie en de burger terug dichter bij elkaar? Dit was de opdracht die een team 2ITF studenten aannam op de ‘Smart Policing’ hackathon. Puttend uit hun eigen leefwereld en ervaring kozen ze ervoor om een app te ontwikkelen waardoor jongeren op een laagdrempelige manier problemen kunnen doorgeven aan de politie.

Thema’s als seksueel misbruik, pesten of drugsmisbruik werden niet uit de weg gegaan, want ambitieus als ze zijn wilden onze studenten net die moeilijke eerste stap bij deze topics vergemakkelijken.

Hun knappe teamwerk en de app genaamd ‘Okay’ viel op bij de jury en bezorgde dit team de eerste prijs in de discipline.',
                    'hyperlink' => 'https://www.youtube.com/watch?v=VSPfp9yZDUY',
                    'hyperlink_naam' => 'Pitch'
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Camp2Camp',
                    'beschrijving' => 'Camp2Camp is een organisatie die campingmateriaal verhuurd op festivals, stadscampings,... Als opdracht moesten we voor hun een website met webshop ontwikkelen in de eigen huisstijl van Camp2Camp.

Daarnaast moesten we ook nog een stockbeheerapplicatie ontwikkelen om een duidelijke flow weer te geven van al het materiaal. Zo kunnen ze op elk moment bekijken waar welk onderdeel zich bevindt.',
                    'hyperlink' => 'https://youtu.be/EpcyMPw4MVg',
                    'hyperlink_naam' => 'Youtube demo'
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Visitekaartjes robot',
                    'beschrijving' => 'Voor dit project kregen we een robot van VanRoey ter beschikking. Voor deze opdracht te doen lukken moesten we hem zo programmeren dat hij visitekaartjes van klanten kon aannemen, daarnaast moest hij ook nog een klein dansje kunnen doen.

Voor het tweede deel van de opdracht moesten we automatisch een mailtje laten sturen naar het emailadres dat op het visitekaartjes stond. Dit alles hebben we gedaan met behulp van Azure.',
                    'hyperlink' => 'https://youtu.be/q9LAa7qHk_w',
                    'hyperlink_naam' => 'Youtube demo'
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Datacenter automatisation',
                    'beschrijving' => 'Een datacenter automatiseren, hoe begin je daaraan? 2ITF Student Wout mocht het uitzoeken voor een echte klant. Hij kreeg de volledige verantwoordelijkheid vanaf de projectplanning tot de uiteindelijke uitwerking.

Een knappe uitwerking met onder meer een webapplicatie en Power Shell scripts zorgt ervoor dat de klant tegenwoordig in een paar minuten een container kan aanmaken op hun datacenter, waar dit vroeger al snel een paar uur in beslag nam! ',
                    'hyperlink' => '',
                    'hyperlink_naam' => ''
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'WebCtrl student ondernemer',
                    'beschrijving' => 'Een studiecarrière combineren met een professionele carrière, niet voor iedereen weggelegd, maar 3ITF student Jelle waagde de sprong.

Na het eerste jaar IT Factory besloot hij de leerstof om te zetten in de praktijk. Mede gemotiveerd door de business gerelateerde lessen uit het tweede jaar, besloot hij te starten als student-ondernemer.

Door zijn kennis uit de IT Factory kon hij direct meerwaarde creëren voor echte bedrijven. Met zijn bedrijf WebCtrl helpt hij nu lokale bedrijven om hun online aanwezigheid te versterken door ondermeer websites en webshops te ontwikkelen.

De sprong wagen tijdens je studies naar ondernemerschap? Jelle raadt het alvast iedereen aan! ',
                    'hyperlink' => 'https://webctrl.be/',
                    'hyperlink_naam' => 'Webctrl'
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Internet Of Things essentials',
                    'beschrijving' => 'Voor het vak ‘Internet of Things Essentials’ werden de 1ITF studenten uitgedaagd om een echt werkende lift te bouwen. Student Victor nam deze uitdaging met volle overtuiging aan besloot ‘the extra mile’ te gaan.

Met software en hardware werd hij ondersteund door de school, maar bij de liftconstructie mocht hij zijn fantasie de vrije loop laten en hij koos voor een huisgemaakte 3D print!',
                    'hyperlink' => 'https://www.youtube.com/watch?v=U1kIyyfba1s',
                    'hyperlink_naam' => 'Youtube demo'
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Keuzeproject Internet Of Things',
                    'beschrijving' => 'Niet goed weten wat je later wil doen en toch beginnen studeren, dat kan gewoon aan de IT Factory. Om je te helpen kiezen worden er in het eerste jaar Keuzeprojecten ingericht.

Student Alex koos als project het thema Internet of Things en werd uitgedaagd eigen afstandsbediening te maken voor een beamer.

Hij ging aan de slag met een Raspberry Pi, infrarood zender en ontvanger en een zelfgemaakt dashboard om zo de beamer te laten werken niet met de meegeleverde afstandsbediening, maar door zijn eigen computer en smartphone! ',
                    'hyperlink' => 'https://www.youtube.com/watch?v=3dlmfCI99bQ',
                    'hyperlink_naam' => 'Youtube demo'
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Project Tech and Health',
                    'beschrijving' => 'Studenten die een extra uitdaging zoeken kunnen ondermeer deelnemen aan het ‘Tech & Health’ programma. Hier worden technologie en healthcare gecombineerd in een project met een multidisciplinair team voor een echte opdrachtgever.

Studenten Thibault en Yannick gingen de uitdaging aan en bedachten onder meer een systeem voor valpreventie met vloerverlichting in combinatie met bewegingssensoren, een actualiteitsbord met video communicatiesysteem en een paniekknop die niet alleen zorgverleners contacteerd, maar ook een veilige omgeving voorziet door uitschakeling van potentiële gevaarlijke huishoudelijke apparaten.

Innovatieve ideeën voor een kwetsbare bevolkingsgroep! ',
                    'hyperlink' => 'https://brensj.be/multidisciplinair-studententeam-thomas-more-brainstormt-over-innovaties-voor-mobiele-zorgunit/',
                    'hyperlink_naam' => 'www.brensj.be'
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Digital Innovation project portaal',
                    'beschrijving' => 'Studenten Thibault en Yannick kregen van hun docent Digital Innovation de opdracht een portaalapp te ontwikkelen om bedrijven en studenten aan elkaar te koppelen.

Ze kozen om de app te maken in Angular met een NodeJS backend. De studenten namen ook de hele projectbegeleiding voor hun rekening. Zelfstandigheid, nieuwe technologieën en een goede samenwerking overheerste in dit project.

Een mooi project dat de komende jaren veel gebruikt gaat worden! ',
                    'hyperlink' => '',
                    'hyperlink_naam' => ''
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Project KNX Smart Home',
                    'beschrijving' => 'Voor het vak KNX Smart Home kreeg 3ITF student Maarten de opdracht om een project te maken met de Gira X1 module. Hij koos ervoor een app te maken om app te maken die je kan gebruiken om je eigen ‘smart home’ aan te sturen.

Wie droomt er niet van om op afstand je volledige huis te kunnen besturen en te zorgen dat alles piekfijn in orde is tegen dat je thuiskomt ! ',
                    'hyperlink' => '',
                    'hyperlink_naam' => ''
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Disruptive tour Tel Aviv - ICE Cube',
                    'beschrijving' => 'Studenten die een extra uitdaging zoeken kunnen met al hun creativiteit terecht bij de ICE Cube. Voor deze uitdaging trokken een aantal studenten naar Tel Aviv, ook wel gekend als Silicon Wadi. Ze gingen er de startup scene van Israël ontdekken in samenwerking met het Holon Institute of Technology.

Ze kregen er verschillende lezingen over de nieuwste technologieën. Deze lezingen werden gegeven door toch wel de toppers in hun vak. Ze hebben er onder andere een design thinking workshop gehad van niemand minder dan de ontwerper van Waze. Naast deze verschillende workshops en lezingen kregen ze ook wat meer te zien van de Israëlische cultuur. Een bezoek aan de Dode Zee of Jerusalem behoorde evenzeer tot het programma. ',
                    'hyperlink' => '',
                    'hyperlink_naam' => ''
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Vibus student ondernemer',
                    'beschrijving' => 'Studeren en ondernemen combineren? Dit lukt perfect volgens het jonge geëngageerde team van Vibus. Zij startten in januari 2020 met start-ups en kleine zelfstandigen, maar ook particulieren te helpen met zich grafisch voor te stellen door middel van webdevelopment en grafische ontwerpen.

De eerste klanten kwamen binnen via kennissen en vrienden, maar al snel konden zij uitbreiden door een sterk network te ontwikkelen.

Volgens Vince moet je hier en daar wel wat zaken opofferen om succesvol te worden, maar het is het zeker en vast waard! ',
                    'hyperlink' => 'https://vibus.be/',
                    'hyperlink_naam' => 'www.vibus.be'
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Cordova - ICE connect app',
                    'beschrijving' => 'Mensen met elkaar in contact brengen, een nobel gebaar.

Student Ward koos ervoor om zijn 2ITF Cordova project te kaderen rond connecties leggen. Hij ontwikkelde een app om mensen samen te brengen en om bij te houden met wie je allemaal contact gehad hebt.

Hij slaagde er zelfs in zijn app te publiceren op de Play Store. Geïnteresseerd? Zoek naar ICE Connect app! ',
                    'hyperlink' => '',
                    'hyperlink_naam' => ''
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Mobile Development - Het museum',
                    'beschrijving' => 'Een museumbezoek interessant maken, geen simpele opdracht. Toch namen studenten Tom en Ward de opdracht aan voor het 3ITF vak ‘Mobile Development’.

Ze gebruikten Flutter, Augmented Reality en Image Recognition om schilderijen tot leven te laten komen en hun verhaal te laten vertellen.

Een museum bezoeken werd ineens een heel pak leuker! ',
                    'hyperlink' => 'https://test.di-webhost.stuvm.be/assets/img/portfolio/Mobile_Dev_3.mp4',
                    'hyperlink_naam' => 'Demo'
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Oriëntation project - LAN party',
                    'beschrijving' => 'Niet goed weten wat je later wil worden en toch komen studeren? Dat kan gewoon bij de IT Factory. Om tijdens het jaar toch te weten te komen welke job je later wil gaan doen, worden er tijdens het eerste jaar ‘Orientation Projects’ ingericht.

Student Ward koos met zijn team al eerste project het Cloud and Cyber Security project ‘Lan Party’. Zij bouwden een netwerk om over verschillende klaslokalen te kunnen gamen met collega studenten.

Een fijne afsluiter van een mooie week! ',
                    'hyperlink' => '',
                    'hyperlink_naam' => ''
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'PHP project - alumni avond',
                    'beschrijving' => 'Het sluitstuk in het tweede jaar Application Development is het PHP project. Een docent is opdrachtgever en studenten analyseren eerst de vereisten, om vervolgens met code en hun analyse aan de slag te gaan en een applicatie te bouwen.

Collega Christel gaf student Ward en zijn team de opdracht een applicatie te bouwen waarmee zij de administratie omtrent de alumni avond kon beheren.

Het team leverde niet enkel een beheersfunctionaliteit op, maar ook een user managementsysteem, instelbare user profiles en een heus foto-beheer systeem! ',
                    'hyperlink' => '',
                    'hyperlink_naam' => ''
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'titel' => 'Smart Policing - Smart Selection & Training',
                    'beschrijving' => 'Hoe vind je de beste mensen voor de job ? Een team studenten uit 3ITF deed mee aan de Smart Policing hackathon en bedacht een online ‘Capture-the-flag’ platform dat de Federal Computer Crime Unit kan gebruiken voor training en aanwerving van nieuwe krachten.

Door een reeks van IT en Cyber Security gerelateerde puzzels te doorlopen kunnen medewerkers en potentiële kandidaten hun kennis demonstreren en aanscherpen.

Smart recruitment in een online wereld!',
                    'hyperlink' => 'https://fccu.sinners.be/',
                    'hyperlink_naam' => 'www.fccu.sinners.be/'
                ],
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
