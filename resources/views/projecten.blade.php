<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    @include('shared.icons')
    <title>@yield('title', 'IT Factory | Projecten Bachelor')</title>
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigation')

{{--projecten--}}
<!-- ======= Portfolio Section ======= -->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="section-title">
            <h2>PROJECTEN BACHELOR</h2>
            <p>Portfolio</p>
        </div>

        {{--        sorteer module --}}
        <div class="row justify-content-center" id="sort">
            <ul id="portfolio-filters">
                <li>ALL</li>
                <li>APP</li>
                <li>AI</li>
                <li>CCS</li>
                <li>DI</li>
                <li>HACKATHON</li>
                <li>IOT</li>
                <li>OTHER</li>
            </ul>
        </div>

        {{--        filter-app, filter-iot, filter-di, filter-ccs, filter-ai, filter-hackathon, filter-other--}}

        <div class="row portfolio-container">
{{--            TEST --}}
            @foreach($data as $project)
                <div class="col-lg-4 col-sm-6 mb-4 filter-{{strtolower($project->tag_naam)}}">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$project->id}}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="/uploads/projects/{{$project->id}}-{{$project->titel}}/{{$project->titel}}-1.jpg" alt='Foto van project "{{$project->titel}}"'/>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{$project->titel}}</div>
                            <div class="portfolio-caption-subheading text-muted">{{$project->tag_naam}}</div>
                        </div>
                    </div>
                </div>
        @endforeach


{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-ai filter-hackathon">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/ha_patientzero1.jpg" alt="Patient Zero"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">‘Patient Zero’</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Hackathon, Artificial Intelligence</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-di filter-ccs">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/di_datacenterautomatisation1.jpg"--}}
{{--                             alt="Datacenter Automatisation"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Datacenter automatisation</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Digital Innovation, Cloud & Cyber--}}
{{--                            Security--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-ccs filter-hackathon">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/ha_smartpolicinghackathon1.jpg"--}}
{{--                             alt="Smart Policing Hackathon"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">‘Smart Policing – Smart Interaction’</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Hackathon</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0 filter-app">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/app_webctrl1.jpg" alt="Web-Ctrl"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">WebCtrl, Student-ondernemer</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Student-ondernemer, Application--}}
{{--                            Development--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0 filter-iot">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/iot_iotessentials1.jpg" alt="IoT Essentials"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Internet of Things Essentials</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Categorie: Internet of Things</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-iot">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/iot_keuzeprojectiot1.jpg"--}}
{{--                             alt="Keuzeproject IoT"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Keuzeproject Internet of Things</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Keuzeprojecten, Internet of Things</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-other">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal7">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/tech_techandhealth1.jpg"--}}
{{--                             alt="Tech and Health"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Project Tech & Health</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Tech & Health</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-di">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal8">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/di_projectportaal1.jpg" alt="Project Portaal"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Digital Innovation Project Portaal</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Digital Innovation</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-iot">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal9">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/iot_KNX1.jpg" alt="KNX"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Project KNX Smart Home</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Internet of Things</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-ccs filter-hackathon">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal10">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/ha_smartpolicinghackathon3.jpg"--}}
{{--                             alt="Smart Policing Hackathon"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">‘Smart Policing – Smart Selection & Training’--}}
{{--                        </div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Hackathon, Cloud & Cyber Security</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-other">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal11">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/ice_telaviv1.jpg" alt="Ice Cube Tel Aviv"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Disruptive tour Tel Aviv – ICE Cube</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">ICE Cube, Other</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-di">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal12">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/di_websiteitfactory1.jpg" alt="Website ITF"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Website IT Factory</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Digital Innovation</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-other">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal13">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/other_vibus1.jpg" alt="Vibus"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Vibus Student-ondernemer</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Student-ondernemer</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-app">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal14">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/ICEConnect_1.png" alt="ICE Connect"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Cordova - ICE Connect app</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Application Development</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-app">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal15">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/Mobile_Dev_1.png" alt="Flutter mobile development"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Mobile Development - Het Museum</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Application Development</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-ccs">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal16">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/Keuzeproject_BroodSpelen_2.png" alt="broodspelen"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">Orientation Project 1: Lan-party</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Cloud & Cyber Security</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 col-sm-6 mb-4 filter-app">--}}
{{--                <div class="portfolio-item">--}}
{{--                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal17">--}}
{{--                        <div class="portfolio-hover">--}}
{{--                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>--}}
{{--                        </div>--}}
{{--                        <img class="img-fluid" src="assets/img/portfolio/PHP_Alumni_1.png" alt="Php alumni app"/>--}}
{{--                    </a>--}}
{{--                    <div class="portfolio-caption">--}}
{{--                        <div class="portfolio-caption-heading">PHP Project - Alumni avond</div>--}}
{{--                        <div class="portfolio-caption-subheading text-muted">Application Development</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

            <!-- Portfolio Modals-->
            <!-- Modal 1-->
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Hackathon ‘Patient Zero’ </h2>
                                        <p class="item-intro text-muted">Hackathon, Artificial Intelligence</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/ha_patientzero2.jpg"
                                             alt="Patient Zero"/>
                                        <p>De opdracht kon niet meer visionair zijn. Tussen 30 januari en 1 Februari
                                            2020 deed een groep 1ITF studenten mee aan de hackathon Patiënt zero. De
                                            opdracht: zoek online naar datasets over ziektes en verspreidingspatronen en
                                            tracht te achterhalen waar de ziekte uiteindelijk begonnen is. Gezien de
                                            huidige corona pandemie kon dit geen actuelere opdracht zijn... </p>
                                        <p>Hoewel de technologie nieuw was, was het team eerstejaars toch sterk genoeg
                                            om een mooie 2de plaats in de wacht te slepen!</p>

                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Modal 2-->
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Datacenter automatisation </h2>
                                        <p class="item-intro text-muted">Digital Innovation, Cloud & Cyber Security</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/di_datacenterautomatisation2.jpg"
                                             alt="Datacenter Automatisation"/>
                                        <p>Een datacenter automatiseren, hoe begin je daaraan? 2ITF Student Wout mocht
                                            het uitzoeken voor een echte klant. Hij kreeg de volledige
                                            verantwoordelijkheid vanaf de projectplanning tot de uiteindelijke
                                            uitwerking.</p>
                                        <p>Een knappe uitwerking met onder meer een webapplicatie en Power Shell scripts
                                            zorgt ervoor dat de klant tegenwoordig in een paar minuten een container kan
                                            aanmaken op hun datacenter, waar dit vroeger al snel een paar uur in beslag
                                            nam! </p>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Modal 3-->
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Hackathon ‘Smart Policing – Smart Interaction’</h2>
                                        <p class="item-intro text-muted">Hackathon, Cloud & Cyber Security</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/ha_smartpolicinghackathon2.png"
                                             alt="Smart Policing Hackathon"/>
                                        <p>Hoe brengen we de politie en de burger terug dichter bij elkaar? Dit was de
                                            opdracht die een team 2ITF studenten aannam op de ‘Smart Policing’
                                            hackathon. Puttend uit hun eigen leefwereld en ervaring kozen ze ervoor om
                                            een app te ontwikkelen waardoor jongeren op een laagdrempelige manier
                                            problemen kunnen doorgeven aan de politie. </p>
                                        <p>Thema’s als seksueel misbruik, pesten of drugsmisbruik werden niet uit de weg
                                            gegaan, want ambitieus als ze zijn wilden onze studenten net die moeilijke
                                            eerste stap bij deze topics vergemakkelijken.</p>
                                        <p>Hun knappe teamwerk en de app genaamd ‘Okay’ viel op bij de jury en bezorgde
                                            dit team de eerste prijs in de discipline.</p>
                                        <ul class="list-inline">
                                            <li><a href="https://www.youtube.com/watch?v=VSPfp9yZDUY" target="_blank">Pitch</a></li>
                                        </ul>

                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Modal 4-->
            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">WebCtrl, Student-ondernemer</h2>
                                        <p class="item-intro text-muted">Student-ondernemer, Application Development</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/app_webctrl2.jpg"
                                             alt="Web-Ctrl"/>
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
                                        <ul class="list-inline">
                                            <li><a href="https://webctrl.be/" target="_blank">Webctrl.be</a></li>

                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Modal 5-->
            <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Internet of Things Essentials</h2>
                                        <p class="item-intro text-muted">Internet of Things</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/iot_iotessentials2.jpg"
                                             alt="IoT Essentials"/>
                                        <p>Voor het vak ‘Internet of Things Essentials’ werden de 1ITF studenten
                                            uitgedaagd om een echt werkende lift te bouwen.
                                            Student Victor nam deze uitdaging met volle overtuiging aan besloot ‘the
                                            extra mile’ te gaan.</p>
                                        <p>Met software en hardware werd hij ondersteund door de school, maar bij de
                                            liftconstructie mocht hij zijn fantasie de vrije loop laten en hij koos voor
                                            een huisgemaakte 3D print!</p>
                                        <ul class="list-inline">
                                            <li><a href="https://www.youtube.com/watch?v=U1kIyyfba1s" target="_blank">Youtube
                                                    pitch</a></li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Modal 6-->
            <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Keuzeproject Internet of Things</h2>
                                        <p class="item-intro text-muted">Keuzeprojecten, Internet of Things</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/iot_keuzeprojectiot2.jpg"
                                             alt="Keuzeproject IoT"/>
                                        <p>Niet goed weten wat je later wil doen en toch beginnen studeren, dat kan
                                            gewoon aan de IT Factory. Om je te helpen kiezen worden er in het eerste
                                            jaar Keuzeprojecten ingericht. </p>
                                        <p>Student Alex koos als project het thema Internet of Things en werd uitgedaagd
                                            eigen afstandsbediening te maken voor een beamer.</p>
                                        <p>Hij ging aan de slag met een Raspberry Pi, infrarood zender en ontvanger en
                                            een zelfgemaakt dashboard om zo de beamer te laten werken niet met de
                                            meegeleverde afstandsbediening, maar door zijn eigen computer en
                                            smartphone! </p>
                                        <ul class="list-inline">
                                            <li><a href="https://www.youtube.com/watch?v=3dlmfCI99bQ" target="_blank">Youtube
                                                    demo</a></li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 7-->
            <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Project Tech & Health</h2>
                                        <p class="item-intro text-muted">Tech & Health</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/tech_techandhealth3.jpg" alt="Tech&Health"/>
                                        <p>Studenten die een extra uitdaging zoeken kunnen ondermeer deelnemen aan het
                                            ‘Tech & Health’ programma. Hier worden technologie en healthcare
                                            gecombineerd in een project met een multidisciplinair team voor een echte
                                            opdrachtgever.</p>
                                        <p>Studenten Thibault en Yannick gingen de uitdaging aan en bedachten onder meer
                                            een systeem voor valpreventie met vloerverlichting in combinatie met
                                            bewegingssensoren, een actualiteitsbord met video communicatiesysteem en een
                                            paniekknop die niet alleen zorgverleners contacteerd, maar ook een veilige
                                            omgeving voorziet door uitschakeling van potentiële gevaarlijke
                                            huishoudelijke apparaten. </p>
                                        <p>Innovatieve ideeën voor een kwetsbare bevolkingsgroep! </p>
                                        <ul class="list-inline">
                                            <li>
                                                <a href="https://brensj.be/multidisciplinair-studententeam-thomas-more-brainstormt-over-innovaties-voor-mobiele-zorgunit/"
                                                   target="_blank">www.brensj.be</a></li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 8-->
            <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Digital Innovation Project Portaal</h2>
                                        <p class="item-intro text-muted">Digital Innovation</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/di_projectportaal2.jpg"
                                             alt="Project Portaal"/>
                                        <p>Studenten Thibault en Yannick kregen van hun docent Digital Innovation de
                                            opdracht een portaalapp te ontwikkelen om bedrijven en studenten aan elkaar
                                            te koppelen.</p>
                                        <p>Ze kozen om de app te maken in Angular met een NodeJS backend. De studenten
                                            namen ook de hele projectbegeleiding voor hun rekening. Zelfstandigheid,
                                            nieuwe technologieën en een goede samenwerking overheerste in dit
                                            project. </p>
                                        <p>Een mooi project dat de komende jaren veel gebruikt gaat worden! </p>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 9-->
            <div class="portfolio-modal modal fade" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Project KNX Smart Home</h2>
                                        <p class="item-intro text-muted">Internet of Things</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/iot_KNX2.jpg"
                                             alt=""/>
                                        <p>Voor het vak KNX Smart Home kreeg 3ITF student Maarten de opdracht om een
                                            project te maken met de Gira X1 module. Hij koos ervoor een app te maken om
                                            app te maken die je kan gebruiken om je eigen ‘smart home’ aan te
                                            sturen.</p>
                                        <p>Wie droomt er niet van om op afstand je volledige huis te kunnen besturen en
                                            te zorgen dat alles piekfijn in orde is tegen dat je thuiskomt ! </p>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 10-->
            <div class="portfolio-modal modal fade" id="portfolioModal10" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Hackathon ‘Smart Policing – Smart Selection &
                                            Training</h2>
                                        <p class="item-intro text-muted">Hackathon, Cloud & Cyber Security</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/ha_smartpolicinghackathon4.jpg"
                                             alt="Smart Policing Hackathon"/>
                                        <p>Hoe vind je de beste mensen voor de job ? Een team studenten uit 3ITF deed
                                            mee aan de Smart Policing hackathon en bedacht een online ‘Capture-the-flag’
                                            platform dat de Federal Computer Crime Unit kan gebruiken voor training en
                                            aanwerving van nieuwe krachten. </p>
                                        <p>Door een reeks van IT en Cyber Security gerelateerde puzzels te doorlopen
                                            kunnen medewerkers en potentiële kandidaten hun kennis demonstreren en
                                            aanscherpen. </p>
                                        <p>Smart recruitment in een online wereld!</p>
                                        <ul class="list-inline">
                                            <li><a href="https://fccu.sinners.be/"
                                                   target="_blank">www.fccu.sinners.be</a></li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 11-->
            <div class="portfolio-modal modal fade" id="portfolioModal11" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Disruptive tour Tel Aviv – ICE Cube</h2>
                                        <p class="item-intro text-muted">Ice Cube, Disruptive tour</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/ice_telaviv2.jpg"
                                             alt="ICE Cube Tel Aviv"/>
                                        <p>Studenten die een extra uitdaging zoeken kunnen met al hun creativiteit
                                            terecht bij de ICE Cube. Voor deze uitdaging trokken een aantal studenten
                                            naar Tel Aviv, ook wel gekend als Silicon Wadi. Ze gingen er de startup
                                            scene van Israël ontdekken in samenwerking met het Holon Institute of
                                            Technology. </p>
                                        <p>Ze kregen er verschillende lezingen over de nieuwste technologieën. Deze
                                            lezingen werden gegeven door toch wel de toppers in hun vak. Ze hebben er
                                            onder andere een design thinking workshop gehad van niemand minder dan de
                                            ontwerper van Waze. Naast deze verschillende workshops en lezingen kregen ze
                                            ook wat meer te zien van de Israëlische cultuur. Een bezoek aan de Dode Zee
                                            of Jerusalem behoorde evenzeer tot het programma. </p>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 12-->
            <div class="portfolio-modal modal fade" id="portfolioModal12" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Website IT Factory</h2>
                                        <p class="item-intro text-muted">Digital Innovation, Application development</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/di_websiteitfactory1.jpg" alt="Website ITF"/>
                                        <p>Studenten Digital Innovation kregen de opdracht om op 3 weken tijd een
                                            volledig nieuwe website te ontwikkelen. De opdracht was niet enkel om een
                                            website te bouwen maar ook om nieuwe zaken bij te leren. Zo leerden ze onder
                                            andere werken met Laravel, php, jquery,… Daarnaast zijn ze nog volop bezig
                                            om een bot te installeren die ze later kunnen gebruiken in de website. </p>
                                        <ul class="list-inline">
                                            <li><a href="/" target="_blank">www.weareitfactory.be</a>
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 13-->
            <div class="portfolio-modal modal fade" id="portfolioModal13" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Vibus, student-ondernemer</h2>
                                        <p class="item-intro text-muted">Application Development, Student-ondernemer</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/other_vibus2.jpg" alt="Vibus"/>
                                        <p>Studeren en ondernemen combineren? Dit lukt perfect volgens het jonge geëngageerde team van Vibus. Zij startten in januari 2020 met start-ups en kleine zelfstandigen, maar ook particulieren te helpen met zich grafisch voor te stellen door middel van webdevelopment en grafische ontwerpen.  </p>
                                        <p>De eerste klanten kwamen binnen via kennissen en vrienden, maar al snel konden zij uitbreiden door een sterk network te ontwikkelen.  </p>
                                        <p>Volgens Vince moet je hier en daar wel wat zaken opofferen om succesvol te worden, maar het is het zeker en vast waard! </p>
                                        <ul class="list-inline">
                                            <li><a href="https://vibus.be/" target="_blank">www.vibus.be</a>
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 14-->
            <div class="portfolio-modal modal fade" id="portfolioModal14" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Cordova - ICE Connect</h2>
                                        <p class="item-intro text-muted">Application Development</p>
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/ICEConnect_2.png" alt="ICE Connect"/>
                                        <p>Mensen met elkaar in contact brengen, een nobel gebaar.</p>
                                        <p>Student Ward koos ervoor om zijn 2ITF Cordova project te kaderen rond connecties leggen. Hij ontwikkelde een app om mensen samen te brengen en om bij te houden met wie je allemaal contact gehad hebt. </p>
                                        <p>Hij slaagde er zelfs in zijn app te publiceren op de Play Store. Geïnteresseerd? Zoek naar ICE Connect app! </p>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 15-->
            <div class="portfolio-modal modal fade" id="portfolioModal15" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Mobile development - Het Museum</h2>
                                        <p class="item-intro text-muted">Application Development, Student-ondernemer</p>
{{--                                        <img class="img-fluid d-block mx-auto"--}}
{{--                                             src="assets/img/portfolio/Movile_Dev_3.mp4" alt="Vibus"/>--}}
{{--                                        <video id="video" class="img-fluid d-block mx-auto" width="300" height="auto" controls>--}}
{{--                                            <source src="assets/img/portfolio/Mobile_Dev_3.mp4" type="video/mp4">--}}
{{--                                            De browser ontersteund geen video files.--}}
{{--                                        </video>--}}
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/Mobile_Dev_2.png" alt="museum"/>
                                        <p>Een museumbezoek interessant maken, geen simpele opdracht. Toch namen studenten Tom en Ward de opdracht aan voor het 3ITF vak ‘Mobile Development’.  </p>
                                        <p>Ze gebruikten Flutter, Augmented Reality en Image Recognition om schilderijen tot leven te laten komen en hun verhaal te laten vertellen.</p>
                                        <p>Een museum bezoeken werd ineens een heel pak leuker! </p>
                                        <ul class="list-inline">
                                            <li><a href="assets/img/portfolio/Mobile_Dev_3.mp4" target="_blank">Demo</a>
                                            </li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 16-->
            <div class="portfolio-modal modal fade" id="portfolioModal16" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Orientation Project 1: Lan-party</h2>
                                        <p class="item-intro text-muted">Cloud & Cyber Security</p>
                                        {{--                                        <img class="img-fluid d-block mx-auto"--}}
                                        {{--                                             src="assets/img/portfolio/Movile_Dev_3.mp4" alt="Vibus"/>--}}
                                        {{--                                        <video id="video" class="img-fluid d-block mx-auto" width="300" height="auto" controls>--}}
                                        {{--                                            <source src="assets/img/portfolio/Mobile_Dev_3.mp4" type="video/mp4">--}}
                                        {{--                                            De browser ontersteund geen video files.--}}
                                        {{--                                        </video>--}}
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/Keuzeproject_BroodSpelen_1.png" alt="Broodspelen"/>
                                        <p>Niet goed weten wat je later wil worden en toch komen studeren? Dat kan gewoon bij de IT Factory. Om tijdens het jaar toch te weten te komen welke job je later wil gaan doen, worden er tijdens het eerste jaar ‘Orientation Projects’ ingericht.</p>
                                        <p>Student Ward koos met zijn team al eerste project het Cloud and Cyber Security project ‘Lan Party’. Zij bouwden een netwerk om over verschillende klaslokalen te kunnen gamen met collega studenten.</p>
                                        <p>Een fijne afsluiter van een mooie week! </p>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 17-->
            <div class="portfolio-modal modal fade" id="portfolioModal17" tabindex="-1" role="dialog"
                 aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/cancel.svg"
                                                                           alt="Close modal"/></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">PHP Project - Alumni avond</h2>
                                        <p class="item-intro text-muted">Application Development, Student-ondernemer</p>
                                        {{--                                        <img class="img-fluid d-block mx-auto"--}}
                                        {{--                                             src="assets/img/portfolio/Movile_Dev_3.mp4" alt="Vibus"/>--}}
                                        {{--                                        <video id="video" class="img-fluid d-block mx-auto" width="300" height="auto" controls>--}}
                                        {{--                                            <source src="assets/img/portfolio/Mobile_Dev_3.mp4" type="video/mp4">--}}
                                        {{--                                            De browser ontersteund geen video files.--}}
                                        {{--                                        </video>--}}
                                        <img class="img-fluid d-block mx-auto"
                                             src="assets/img/portfolio/PHP_Alumni_2.png" alt="php alumni app"/>
                                        <p>Het sluitstuk in het tweede jaar Application Development is het PHP project. Een docent is opdrachtgever en studenten analyseren eerst de vereisten, om vervolgens met code en hun analyse aan de slag te gaan en een applicatie te bouwen.</p>
                                        <p>Collega Christel gaf student Ward en zijn team de opdracht een applicatie te bouwen waarmee zij de administratie omtrent de alumni avond kon beheren.  </p>
                                        <p>Het team leverde niet enkel een beheersfunctionaliteit op, maar ook een user managementsysteem, instelbare user profiles en een heus foto-beheer systeem! </p>

                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Sluiten
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- End Portfolio --}}

{{--  Footer  --}}
@include('shared.footer')
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
