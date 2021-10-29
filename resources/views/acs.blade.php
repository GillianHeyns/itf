@extends('layouts.templateacs')

@include('shared.icons')

@section('title', 'IT Factory | Applied Computer Science')

@section('main')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center banner">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
            <h1 class="bannerlogo">#ITFACTORY</h1>
            <h2 class="h2bannerlogo">The training for the latest information technology!</h2>

            {{--            <a href="../dagopleiding"--}}
            {{--               class="btn-get-started">Dagopleiding</a>--}}
            {{--            <a href="../wes" class="btn-get-started"--}}
            {{--            >Werken en studeren</a>--}}

        </div>
    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">


            <div class="section-title">
                <h2>INFO</h2>
                <p>ABOUT US</p>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 itfactory_foto" data-aos="fade-left" data-aos-delay="100">
                    <img src="/assets/img/robot_di.jpg" class="img-fluid groot_scherm"
                         alt="IT factory vakken">
                    {{--                    <img src="/assets/img/itfactory_interactive/ITF-visual-full.jpg" class="img-fluid z-depth-1 klein_scherm"--}}
                    {{--                         alt="IT factory vakken">--}}
                    {{--                    <a href="https://www.thomasmore.be/opleidingen/professionele-bachelor/toegepaste-informatica/application-development"--}}
                    {{--                       target="_blank" class="app groot"><img--}}
                    {{--                            src="/assets/img/itfactory_interactive/app.png" alt="Application development"></a>--}}
                    {{--                    <a href="https://www.thomasmore.be/opleidingen/professionele-bachelor/elektronica-ict/ict-cloud-cyber-security"--}}
                    {{--                       target="_blank" class="ccs groot"><img--}}
                    {{--                            src="/assets/img/itfactory_interactive/ccs.png" alt="Cloud & Cyber security"></a>--}}
                    {{--                    <a href="https://www.thomasmore.be/opleidingen/professionele-bachelor/toegepaste-informatica/artificial-intelligence"--}}
                    {{--                       target="_blank" class="ai groot"><img--}}
                    {{--                            src="/assets/img/itfactory_interactive/ai.png" alt="Artificial Intelligence"></a>--}}
                    {{--                    <a href="https://www.thomasmore.be/opleidingen/professionele-bachelor/toegepaste-informatica/digital-innovation"--}}
                    {{--                       target="_blank" class="di groot"><img--}}
                    {{--                            src="/assets/img/itfactory_interactive/di.png" alt="Digital Innovation"></a>--}}
                    {{--                    <a href="https://www.thomasmore.be/opleidingen/professionele-bachelor/elektronica-ict/elektronica-internet-things"--}}
                    {{--                       target="_blank" class="iot groot"><img--}}
                    {{--                            src="/assets/img/itfactory_interactive/iot.png" alt="Internet of Things"></a>--}}


                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
                    <h3>The IT Factory.<br>
                        Unique in Flanders, the best education for the best students.</h3>
                    <p class="font-italic">
                        The IT Factory is the collective name of the Electronics-ICT and Applied Computer Science tracks
                        at Thomas More University of Applied Sciences, Campus Geel.<br>
                    </p>
                    <p>
                        When enrolling in the Applied Computer Science degree, you'll first get a sound knowledge of the
                        IT landscape and all it's different tracks. <br>
                        After the first year you start your journey in the world of programming and artificial
                        intelligence. In the final year you expand your knowledge of AI and other data related topics
                        like Data Science, Machine Learning and Data Engineering.<br>
                    </p>
                    <p>
                        Interested in our Applied Computer Science degree and want to know more? Then read our student
                        testimonies below or take a look at some of the projects you'll make on our portfolio page.
                    </p>
                    <a href="/projecten" class="learn-more-btn">Our projects [Dutch]</a>
                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row counters no-gutters">

                <div class="col-lg-3 col-6 text-center" data-aos="fade-up">
                    <span class="counter" data-count="630">0</span>
                    <p>Topstudents</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span class="counter" data-count="32">0</span>
                    <p>Nationalities</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span class="counter" data-count="40">0</span>
                    <p>Motivated teachers</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span class="counter" data-count="1274">0</span>
                    <p>Cups of coffee</p>
                </div>

            </div>

        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="call-to-action bg-darkblue">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>TESTIMONIALS</h2>
                <p>Students speaking</p>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center text-faded" role="listbox">
                            <!-- Quote 1 -->
                            <div class="carousel-item active">
                                <div class="quote">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <p><i class="fas fa-quote-left"></i> Interesting courses with plenty of
                                                projects that allow to experience more practical side of subjects.
                                                Teachers, as well as fellow students, are there to help or just talk
                                                about common hobbies and side projects. A great possibility to
                                                participate in AI project to get a better understanding of what it's
                                                about and how subjects are associated with AI. <i
                                                    class="fas fa-quote-right"></i></p>
                                            <p>Giedre Zalaite - 1 ACS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote 2 -->
                            <div class="carousel-item">
                                <div class="quote">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <p><i class="fas fa-quote-left"></i>
                                                There were many interesting courses in the IT Factory from Thomas More
                                                but the AI one stood thanks to its incredible potential for the future.
                                                Combine this with great teachers and a large array of tools and bright
                                                minds I can say that the IT factory, and the AI course in specific, is
                                                an awesome education that will surely interest many.
                                                <i class="fas fa-quote-right"></i></p>
                                            <p>Ehran Lenaerts - 1 ACS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote 3 -->
                            <div class="carousel-item">
                                <div class="quote">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <p><i class="fas fa-quote-left"></i>Despite the challenges of COVID-19 the
                                                university has overall done a good job of making such drastic change to
                                                online learning. The lectures are interactive, fun and
                                                interesting.Teachers always do their best to provide a good, in-depth
                                                explanations, and a personal feedback for every student. Individual
                                                projects teach you how to work independently , developing your
                                                creativity and your practical skills. I’m very happy with first year AI
                                                ACS program of ThomasMore Hogeschool !
                                                <i class="fas fa-quote-right"></i></p>
                                            <p>Rustem Kamalidenov – 1 ACS</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Quote 4 -->
                            <div class="carousel-item">
                                <div class="quote">
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <p><i class="fas fa-quote-left"></i>
                                                I visited IT Factory and they provided me elaborate information
                                                regarding the Computer Science course. I had various conversations with
                                                lecturers of the IT Factory and thereafter paid a visit to the open day
                                                of Thomas More. That was the day I made my final decision and decided to
                                                enroll myself into this course
                                                <i class="fas fa-quote-right"></i></p>
                                            <p>Mattia Andronico - Alumnus</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--                            <!-- Quote 5 -->--}}
                            {{--                            <div class="carousel-item">--}}
                            {{--                                <div class="quote">--}}
                            {{--                                    <div class="row">--}}
                            {{--                                        <div class="col-md-8 col-md-offset-2">--}}
                            {{--                                            <p><i class="fas fa-quote-left"></i>I adore the ambiance at college. Every--}}
                            {{--                                                single person I come across is so passionate and driven. The school--}}
                            {{--                                                itself is very--}}
                            {{--                                                innovative and always on the go to make arrangement. Everything is--}}
                            {{--                                                always--}}
                            {{--                                                running smoothly. The IT Factory is a perfect choice!--}}
                            {{--                                                <i class="fas fa-quote-right"></i></p>--}}
                            {{--                                            <p>Babette Geerkens - 3 APP</p>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <!-- Quote 6 -->--}}
                            {{--                            <div class="carousel-item">--}}
                            {{--                                <div class="quote">--}}
                            {{--                                    <div class="row">--}}
                            {{--                                        <div class="col-md-8 col-md-offset-2">--}}
                            {{--                                            <p><i class="fas fa-quote-left"></i>De IT-Factory is voor mij ideaal. Ik heb--}}
                            {{--                                                mezelf van dag 1 welkom gevoeld. De relatie student docent is super--}}
                            {{--                                                goed. We kunnen altijd terecht op discord voor technische en minder--}}
                            {{--                                                technische vragen. We kunnen altijd rekenen op student en docenten voor--}}
                            {{--                                                ondersteuning.--}}
                            {{--                                                <i class="fas fa-quote-right"></i></p>--}}
                            {{--                                            <p>Bram Geudens - 2 CCS</p>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            {{--                            <!-- Quote 7 -->--}}
                            {{--                            <div class="carousel-item">--}}
                            {{--                                <div class="quote">--}}
                            {{--                                    <div class="row">--}}
                            {{--                                        <div class="col-md-8 col-md-offset-2">--}}
                            {{--                                            <p><i class="fas fa-quote-left"></i>Vanaf het eerste moment wist ik het ...--}}
                            {{--                                                . Het is toch waar wat ze zeggen. Dit is meer dan een studierichting,--}}
                            {{--                                                iedereen is zich zelf en helpt elkaar graag verder. Ik voel me hier--}}
                            {{--                                                helemaal op mijn thuis en geniet elke dag.--}}
                            {{--                                                <i class="fas fa-quote-right"></i></p>--}}
                            {{--                                            <p>Robbe Eyckmans - 1 ITF</p>--}}
                            {{--                                        </div>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-fluid"
                                                                                                    src="/assets/img/testimonials/giedre.jpg"
                                                                                                    alt="Giedre Zalaite">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="1"><img class="img-fluid"
                                                                                     src="/assets/img/testimonials/ehran.jpg"
                                                                                     alt="Ehran Lenaerts">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="2"><img class="img-fluid"
                                                                                     src="/assets/img/testimonials/rustem.jpg"
                                                                                     alt="Rustem Kamalidenov">
                            </li>
                            <li data-target="#quote-carousel" data-slide-to="3"><img class="img-fluid"
                                                                                     src="/assets/img/testimonials/mattia.jpg"
                                                                                     alt="Mattia Andronico">
                            {{--                            </li>--}}
                            {{--                            <li data-target="#quote-carousel" data-slide-to="4"><img class="img-fluid"--}}
                            {{--                                                                                     src="/assets/img/testimonials/babette.jpg"--}}
                            {{--                                                                                     alt="Babette Geerkens">--}}
                            {{--                            </li>--}}
                            {{--                            <li data-target="#quote-carousel" data-slide-to="5"><img class="img-fluid"--}}
                            {{--                                                                                     src="/assets/img/testimonials/bram_geudens.jpg"--}}
                            {{--                                                                                     alt="Bram Geudens">--}}
                            {{--                            </li>--}}
                            {{--                            <li data-target="#quote-carousel" data-slide-to="6"><img class="img-fluid"--}}
                            {{--                                                                                     src="/assets/img/testimonials/robbe_eyckmans.jpg"--}}
                            {{--                                                                                     alt="Robbe Eyckmans">--}}
                            {{--                            </li>--}}
                        </ol>

                        <!-- Carousel Buttons Next/Prev -->
                        <a data-slide="prev" href="#quote-carousel" class="carousel-control-prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a data-slide="next" href="#quote-carousel" class="carousel-control-next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section><!-- End Testimonials Section -->

    <!-- ======= Social Section ======= -->
    <section class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>SOCIALS</h2>
                <p>Social media</p>
            </div>

            <div class="row bigSize">
                <div class="col-xl-12 col-md-6">
                    <iframe id="discord" class="centerYoutube" width="100%" height="450px"
                            src="https://www.youtube.com/embed/z4U2hrULu7c" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-xl-4 col-md-6 hoogte">
                    <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v9.0"
                            nonce="oJ4ChA9H"></script>
                    <div class="fb-page"
                         data-href="https://www.facebook.com/ToegepasteInformatica.ThomasMoreBE"
                         data-tabs="timeline"
                         data-width="" data-height="460" data-small-header="false" data-adapt-container-width="true"
                         data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/ToegepasteInformatica.ThomasMoreBE"
                                    class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/ToegepasteInformatica.ThomasMoreBE">IT Factory</a>
                        </blockquote>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 container">
                    <iframe class="centered frame" src="https://discord.com/widget?id=687565213943332875&theme=dark"
                            width="350" height="500"
                            allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox
                       allow-same-origin allow-scripts"></iframe>
                    <div id="overlay"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <script async defer crossorigin="anonymous"
                            src="https://connect.facebook.net/nl_NL/sdk.js#xfbml=1&version=v9.0"
                            nonce="oJ4ChA9H"></script>
                    <div class="fb-page"
                         data-href="https://www.facebook.com/ElektronicaICT.ThomasMoreBE"
                         data-tabs="timeline"
                         data-width="" data-height="460" data-small-header="false" data-adapt-container-width="true"
                         data-hide-cover="false" data-show-facepile="true">
                        <blockquote cite="https://www.facebook.com/ElektronicaICT.ThomasMoreBE"
                                    class="fb-xfbml-parse-ignore"><a
                                href="https://www.facebook.com/ElektronicaICT.ThomasMoreBE">IT Factory</a>
                        </blockquote>
                    </div>
                </div>
            </div>

            <div class="row smallSize">
                <div class="container">
                    <p><a href="https://www.facebook.com/ToegepasteInformatica.ThomasMoreBE"
                          class="facebookButton socialButton" target="_blank"><i
                                class="fab fa-facebook-square fa-2x"></i>Toegepaste
                            informatica</a></p>
                    <p><a href="https://www.facebook.com/ElektronicaICT.ThomasMoreBE"
                          class="facebookButton socialButton "
                          target="_blank"><i class="fab fa-facebook-square fa-2x"></i>Elektronica-ICT</a></p>
                    <p><a href="https://itf.to/discord" class="discordButton socialButton " target="_blank"><i
                                class="fab fa-discord fa-2x"></i>Discord</a></p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
@endsection
