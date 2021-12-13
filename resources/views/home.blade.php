@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Home')

@section('main')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-content-center align-items-center banner">
        <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
            <h1 class="bannerlogo">#ITFACTORY</h1>
            <h2 class="h2bannerlogo">De training voor de nieuwste informatietechnologie!</h2>
            {{--            <h2>The training for the latest information technology!</h2>--}}



            {{--            <a href="https://www.thomasmore.be/opleidingen/professionele-bachelor/toegepaste-informatica"--}}
            {{--               class="btn-get-started" target="_blank">Toegepaste informatica</a>--}}
            {{--            <a href="https://www.thomasmore.be/opleidingen/professionele-bachelor/elektronica-ict" class="btn-get-started"--}}
            {{--               target="_blank">Elektronica-ICT</a>--}}
            <a href="../dagopleiding"
               class="btn-get-started">Dagopleiding</a>
            <a href="../wes" class="btn-get-started"
            >Werken en studeren</a>

        </div>
    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">


            <div class="section-title">
                <h2>INFO</h2>
                <p>OVER ONS</p>
            </div>

            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2 itfactory_foto" data-aos="fade-left" data-aos-delay="100">
                    <img src="/assets/img/itfactory_interactive/ITF_visual_new.jpg" class="img-fluid groot_scherm"
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
                        Uniek in Vlaanderen, toponderwijs voor topstudenten.</h3>
                    <p class="font-italic">
                        De IT Factory is de gemeenschappelijke richting Elektronica/ICT – Toegepaste Informatica van
                        Thomas
                        More hogeschool campus Geel.<br>
                        Wij bieden aan:
                    </p>
                    <ul>
                        <li><i class="far fa-check-circle"></i> <b>Application Development:</b> when programming rocks
                            your world!
                        </li>
                        <li><i class="far fa-check-circle"></i> <b>Artificial Intelligence:</b> when data and machine
                            learning
                            moves you!
                        </li>
                        <li><i class="far fa-check-circle"></i> <b>Cloud and Cyber Security:</b> when you want to make
                            the internet
                            a safer place!
                        </li>
                        <li><i class="far fa-check-circle"></i> <b>Digital Innovation:</b> when you want to go that
                            extra mile!
                        </li>
                        <li><i class="far fa-check-circle"></i> <b>Internet of Things:</b> when you want to make the
                            world smarter!
                        </li>
                    </ul>
                    <p>
                        Ben je geprikkeld door onze afstudeerrichtingen? Bekijk dan vlug enkele van onze projecten op
                        onze
                        portfoliopagina.
                    </p>
                    <a href="/projecten" class="learn-more-btn">Bekijk onze projecten</a>
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
                    <p>Topstudenten</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span class="counter" data-count="7">0</span>
                    <p>Richtingen</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span class="counter" data-count="40">0</span>
                    <p>Gemotiveerde docenten</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span class="counter" data-count="1274">0</span>
                    <p>Kopjes koffie</p>
                </div>

            </div>

        </div>
    </section>
    <!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section class="call-to-action bg-darkblue">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>GETUIGENISSEN</h2>
                <p>Aan het woord</p>
            </div>

            <div class="col-12">
                <iframe id="discord" class="centerYoutube" width="100%" height="650px"
                        src="https://www.youtube.com/embed/ujTpeZJVZsE" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                        <!-- Carousel Slides / Quotes -->
                        <div class="carousel-inner text-center text-faded" role="listbox">
                        @foreach($testimonies as $count => $testimony)
                            <!-- Quote {{$count+1}}-->
                                <div class="carousel-item @if ($count === 0) active @endif">
                                    <div class="quote">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <p><i class="fas fa-quote-left"></i>
                                                    {{$testimony->testimony_tekst}}
                                                    <i class="fas fa-quote-right"></i></p>
                                                <p>
                                                    {{$testimony->testimony_studentnaam}}
                                                    - {{$testimony->testimony_studierichting}}
                                                    ({{$testimony->testimony_jaar}})
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Bottom Carousel Indicators -->
                        <ol class="carousel-indicators">
                            @foreach($testimonies as $count => $testimony)
                                <li data-target="#quote-carousel" data-slide-to="{{$count}}"
                                    class="@if ($count === 0) active @endif"><img
                                        class="img-fluid"
                                        src="{{$testimony->file_path}}"
                                        alt="@foreach($testimony->photos as $photo){{$photo->foto_beschrijving}}@endforeach">
                                </li>
                            @endforeach
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
                <p>Sociale media</p>
            </div>
            <div class="row bigSize">
                <div class="col-xl-12 col-md-6">
                    <iframe style="border:none;overflow:hidden;border-radius:5px;" id="discord" class="centerYoutube mb-3" width="100%" height="450px"
                            src="https://www.youtube.com/embed/z4U2hrULu7c" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                </div>
                <div class="col-xl-4 col-md-6 hoogte">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FToegepasteInformatica.ThomasMoreBE&tabs=timeline&width=340&height=460&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="340" height="460" style="border:none;overflow:hidden;border-radius:5px;" scrolling="no"
                        frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                </div>
                <div class="col-xl-4 col-md-6 container">
                    <iframe class="centered frame" src="https://discord.com/widget?id=687565213943332875&theme=dark"
                            width="350" height="500"
                            allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox
                       allow-same-origin allow-scripts"></iframe>
                    <div id="overlay"></div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <iframe
                        src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FElektronicaICT.ThomasMoreBE&tabs=timeline&width=340&height=460&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                        width="340" height="460" style="border:none;overflow:hidden;border-radius:5px;" scrolling="no"
                        frameborder="0" allowfullscreen="true"
                        allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
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
