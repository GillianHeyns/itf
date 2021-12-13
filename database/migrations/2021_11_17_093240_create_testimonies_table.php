<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestimoniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testimonies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
//            $table->string('testimony_tekst');
            $table->longText('testimony_tekst');
            $table->string('testimony_studentnaam')->nullable();
            $table->string('testimony_studierichting')->nullable();
            $table->year('testimony_jaar')->nullable();
            $table->string('file_path')->nullable();
            $table->boolean('homepage')->nullable();
            $table->boolean('homepage_EN')->nullable();

//            $table->foreignId('content_block_id');
//            $table->foreign('content_block_id')->references('id')->on('content_blocks')->onDelete('cascade')->onUpdate('cascade');

        });
        // Insert
        DB::table('testimonies')->insert(
            [
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'In de afstudeerrichting Digital Innovation krijgen we heel veel mogelijkheden om samen te werken met verschillende IT-bedrijven en partners. Zo leren we de jobs al een beetje kennen waardoor we later zeker weten wat we willen doen.',
                    'testimony_studentnaam' => 'Gillian Heyns',
                    'testimony_studierichting' => "3 DI",
                    'testimony_jaar' => "2021",
                    'file_path' => "/uploads/testimonies/Gillian Heyns.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Digital Innovation is dé richting voor mensen die graag projectmatig bijleren. Je hebt zelf de keuze waar je je focus legt, zowel bij de vakken die je volgt als de projecten die je doet gedurende het semester. Heb je een hands-on-mentaliteit? Overweeg dan zeker deze richting!',
                    'testimony_studentnaam' => 'Jonas Van Hove',
                    'testimony_studierichting' => "3 DI",
                    'testimony_jaar' => "2021",
                    'file_path' => "/uploads/testimonies/Jonas Van Hove.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Als student met functie beperking was een hoge school geen makkelijke keuze. De ITFactory was mijn keuze en hier heb ik nooit spijt van gehad. Van dag één heb ik alle nodige hulp gekregen van medestudenten en docenten om het voor mij zo aangenaam mogelijk te maken!',
                    'testimony_studentnaam' => 'Axl Kesters',
                    'testimony_studierichting' => "3 DI",
                    'testimony_jaar' => "2021",
                    'file_path' => "/uploads/testimonies/Axl Kesters.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'DI laat me toe om als student met een brede interesse in IT toch vakken van de verschillende richtingen te volgen. Via het projectwerk leer ik ook alle stappen kennen die een project doorloopt, vanaf het opstellen van de verwachting van de klant tot oplevering van het eindresultaat. Het uitwerken van projecten heeft me ook al toegelaten om contacten te leggen binnen de bedrijfswereld. Een echte aanrader dus voor degene die al eens willen proeven hoe het er aan toe gaat in het echte bedrijfsleven.',
                    'testimony_studentnaam' => 'Tobias Geyskens',
                    'testimony_studierichting' => "2 DI",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Tobias Geyskens.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Sinds de eerste dagen in de ITfactory voel ik me hier al welkom, het is meer dan een studierichting. Het is een vriendengroep, een leergroep en na de schooluren zelfs je game groep. Binnen de ITfactory ben je niet 1 van de vele studenten, je bent jezelf, je word herkend & erkend.',
                    'testimony_studentnaam' => 'Alex Coulon',
                    'testimony_studierichting' => "2 CCS",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Alex Coulon.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'I adore the ambiance at college. Every single person I come across is so passionate and driven. The school itself is very innovative and always on the go to make arrangement. Everything is always running smoothly. The IT Factory is a perfect choice! ',
                    'testimony_studentnaam' => 'Babette Geerkens',
                    'testimony_studierichting' => "3 APP",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Babette Geerkens.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Kiezen voor de IT Factory is een van mijn beste beslissingen ooit geweest. Er worden veel activiteiten naast de lessen georganiseerd, wat de teamgeest alleen maar bevorderd. De docenten zijn zeer behulpzaam en staan altijd ter beschikking indien je hulp nodig hebt. ',
                    'testimony_studentnaam' => 'Bram Bleux',
                    'testimony_studierichting' => "1 ITF",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Bram Bleux.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'De IT-Factory is voor mij ideaal. Ik heb mezelf van dag 1 welkom gevoeld. De relatie student docent is super goed. We kunnen altijd terecht op discord voor technische en minder technische vragen. We kunnen altijd rekenen op student en docenten voor ondersteuning.',
                    'testimony_studentnaam' => 'Bram Geudens',
                    'testimony_studierichting' => "2 CCS",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Bram Geudens.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'IoT is de richting voor diegene die niet heel de dag hetzelfde wil doen. De diversiteit is enorm, van het leren hoe bluetooth in elkaar zit tot het besturen van een robotarm. De richting is zeer praktisch met veel hands-on projecten en lessen wat ook een groot pluspunt is.',
                    'testimony_studentnaam' => 'Brent Van der Steen',
                    'testimony_studierichting' => "Alumnus",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Brent Van der Steen.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'We leren met behulp van toffe projecten hoe je zelf verschillende apps kan maken. Als er iets niet goed lukt staat er ook altijd iemand klaar om te helpen, zowel leerkrachten als medestudenten. De hackathons zijn ook superleuk om aan mee te doen. ',
                    'testimony_studentnaam' => 'Britt Ooms',
                    'testimony_studierichting' => "2 APP",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Britt Ooms.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'There were many interesting courses in the IT Factory from Thomas More but the AI one stood thanks to its incredible potential for the future. Combine this with great teachers and a large array of tools and bright minds I can say that the IT factory, and the AI course in specific, is an awesome education that will surely interest many.',
                    'testimony_studentnaam' => 'Ehran Lenaerts',
                    'testimony_studierichting' => "1 ACS",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Ehran Lenaerts.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Interesting courses with plenty of projects that allow to experience more practical side of subjects. Teachers, as well as fellow students, are there to help or just talk about common hobbies and side projects. A great possibility to participate in AI project to get a better understanding of what its about and how subjects are associated with AI.',
                    'testimony_studentnaam' => 'Giedre Zalaite',
                    'testimony_studierichting' => "1 ACS",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Giedre Zalaite.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => ' School voelt steeds minder als een verplichting maar eerder als een hobby, daar heeft de ITF-community zeker voor gezorgd! In het begin van ITF had ik schrik om me niet thuis te voelen en mijn draai niet te kunnen vinden maar daar is niks van waar. De opleiding is een goede combinatie van praktijk en theoretische oefeningen waardoor je later goed voorbereid bent op het werkveld. ',
                    'testimony_studentnaam' => 'Jeroen Weber',
                    'testimony_studierichting' => "2 IOT",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Jeroen Weber.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => ' Een Discord talk meenemen (of geven), of discussies over technologie; alles is welkom en mogelijk, waardoor ik zelfs nu na mijn studententijd trots ben om deel te nemen aan de ITF-community. De docenten zijn meer collega dan docent! ',
                    'testimony_studentnaam' => 'Jorn Snoeks',
                    'testimony_studierichting' => "Alumnus",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Jorn Snoeks.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'IT Factory is zeker aan te raden als je nog niet juist weet wat je wil doen: toegepaste informatica of Elektronica-ICT. Het heeft mij, samen met de ondersteuning van leraren, geholpen om de juiste keuzes te maken en een job te hebben die ik ook graag doe.',
                    'testimony_studentnaam' => 'Kaat Maes',
                    'testimony_studierichting' => "Alumnus",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Kaat Maes.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Thomas More never disappoints, de keuze voor AI des te minder! Ik ben altijd al geboeid geweest door de koers en het mooie is je weet nooit wie wint, of toch wel? In deze boeiende en uitdagende richting leer jij hoe je zelf een model kan bouwen en trainen dat voorspelt wie de koers zal winnen. Zalig toch!',
                    'testimony_studentnaam' => 'Matthias Thijsen',
                    'testimony_studierichting' => "2 AI",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Matthias Thijsen.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => ' I visited IT Factory and they provided me elaborate information regarding the Computer Science course. I had various conversations with lecturers of the IT Factory and thereafter paid a visit to the open day of Thomas More. That was the day I made my final decision and decided to enroll myself into this course ',
                    'testimony_studentnaam' => 'Mattia Andronico',
                    'testimony_studierichting' => "Alumnus",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Mattia Andronico.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Voor mij is de IT-Factory echt een top richting voor iedereen die graag meer wilt leren over alles IT gerelateerd. Ik persoonlijk volg de afstudeerrichting APP Development om dat ik wou leren over hoe een app of website gemaakt worden. De IT-Factory heeft toffe leerkrachten die altijd klaar staan om je met een probleem te helpen, ook heeft de IT-Factory een goed familiegevoel.',
                    'testimony_studentnaam' => 'Michiel Vandezande',
                    'testimony_studierichting' => "2 APP",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Michiel Vandezande.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'De stereotypische introverte ITer, die op zijn bureau in zijn eentje programmeert, is al lang passé. Tegenwoordig wordt er van je verwacht dat je professioneel kan handelen en over voldoende soft skills beschikt. Daarom ben ik blij met de projecten op onze school zelf of bij onze partnerbedrijven.',
                    'testimony_studentnaam' => 'Niels Baptist',
                    'testimony_studierichting' => "2 AI",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Niels Baptist.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'IT Factory, een plaats waar je je inner nerd helemaal kan laten gaan! Als kind droomde ik er al van om uitvinder te worden en in de IT Factory kan ik mijn droom waarmaken. Je kan hier zo groot dromen als je wil!',
                    'testimony_studentnaam' => 'Pepijn Wirges',
                    'testimony_studierichting' => "2 IOT",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Pepijn Wirges.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Vanaf het eerste moment wist ik het ... . Het is toch waar wat ze zeggen. Dit is meer dan een studierichting, iedereen is zich zelf en helpt elkaar graag verder. Ik voel me hier helemaal op mijn thuis en geniet elke dag.' ,
                    'testimony_studentnaam' => 'Robbe Eyckmans',
                    'testimony_studierichting' => "1 ITF",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Robbe Eyckmans.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => ' Een interessante richting om te studeren, het is tof om meer te weten te komen over al die onderdelen in IoT en het automatiseren in KNX. Naast KNX zijn er nog vele andere toffe en interessante vakken. De IT Factory, een echte aanrader!' ,
                    'testimony_studentnaam' => 'Robin Van de Velde',
                    'testimony_studierichting' => "2 IOT",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Robin Van de Velde.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Despite the challenges of COVID-19 the university has overall done a good job of making such drastic change to online learning. The lectures are interactive, fun and interesting.Teachers always do their best to provide a good, in-depth explanations, and a personal feedback for every student. Individual projects teach you how to work independently , developing your creativity and your practical skills. I’m very happy with first year AI ACS program of ThomasMore Hogeschool !' ,
                    'testimony_studentnaam' => 'Rustem Kamalidenov',
                    'testimony_studierichting' => "1 ACS",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Rustem Kamalidenov.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => ' IT Factory the place to be. Hier krijg je veel toffe vakken van programmeren tot embedded devices. Naast de interessante lessen krijg je ook vele kansen om jezelf uit te dagen. Dit kan gaan van verschillende hackathons tot leuk project werk met klasgenoten. De IT Factory is een superleuke opleiding en zeker een aanrader!' ,
                    'testimony_studentnaam' => 'Thiemo Cumps',
                    'testimony_studierichting' => "2 IOT",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Thiemo Cumps.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Vanaf dag 1 voelde ik mij direct thuis in de IT Factory. Het loopt er vol met leuke medestudenten en gemotiveerde docenten. Ik had geen voorkennis en toch was ik direct mee met de leerstof doordat de lessen goed gegeven worden. Ook de hele community die gevormd is op Discord is een groot pluspunt.' ,
                    'testimony_studentnaam' => 'Toon Staes',
                    'testimony_studierichting' => "2 APP",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Toon Staes.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'De IT Factory is een ongelofelijke stimulerende richting. Bij het programmeren kan je van de opdrachten zelf een uitdaging maken, die je creatief moet oplossen. Het is ook geweldig om aangemoedigd te worden om op eigen initiatief deel te nemen aan wedstrijden en hackathons.' ,
                    'testimony_studentnaam' => 'Wilfer Spaepen',
                    'testimony_studierichting' => "2 APP",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Wilfer Spaepen.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Ik heb zelf al veel kunnen doen met de kennis die we hebben gekregen uit onze lessen van CCS. Zoals hoe ik mijn eigen server, en op die server websites, kan hosten die overal en altijd bereikbaar is. Natuurlijk hebben we deze ook leren beveiligen en managen.' ,
                    'testimony_studentnaam' => 'Yannick Vandevenne',
                    'testimony_studierichting' => "2 CCS",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Yannick Vandevenne.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
                ],
                [
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                    'testimony_tekst' => 'Ikzelf ben de richting gestart zonder voorkennis, maar ik heb helemaal niet het gevoel gehad dat voorkennis een vereiste is De docenten nemen de tijd om iedereen mee te krijgen, zonder dat het vertragend werkt voor de mensen met voorkennis. Als je met een probleem zit kan je altijd terecht bij de docenten of opleidingshoofd. Er wordt geluisterd naar iedereen, waardoor je jezelf geen nummer voelt. Ik kan de richting alleen maar aanraden!' ,
                    'testimony_studentnaam' => 'Yoni Praats',
                    'testimony_studierichting' => "Alumnus",
                    'testimony_jaar' => "2020",
                    'file_path' => "/uploads/testimonies/Yoni Praats.jpg",
                    'homepage' => false,
                    'homepage_EN' => false,
//                    'content_block_id' => 1
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
        Schema::dropIfExists('testimonies');
    }
}
