{{--  Navigation  --}}
@include('shared.navigation')

@yield('banner', 'Geen foto beschikbaar...')
<section class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>BACHELOR</h2>
            <p>@yield('titelPagina')</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-7">
                <p>@yield('inhoud_over','Over ons tekst')</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-5">
                <p>@yield('extra_over')</p>
            </div>
        </div>
        <p>@yield('inhoud_aanhetwoord')
    </div>
</section>


<!-- ======= Testimonials Section ======= -->
<section class="onderkant opleidingKlein">
    <div class="container">
        <div class="section-title">
            <h2>GETUIGENISSEN</h2>
            <p>Aan het woord</p>
        </div>

        <div class="container">
            <div class="row bigSize">
                <div class="col-xl-12 col-md-6">
                    @yield('promofilm_keuzerichting')
                </div>
            </div>
        </div>

        <section class="call-to-action bg-darkblue opleiding_testi">
            <div class="container " data-aos="fade-up">


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
                                                <p><i class="fas fa-quote-left"></i>
                                                    @yield('testimonial_1', 'Jyle has helped us develop a professional and beautiful website which showcases our organization very well.')
                                                    <i class="fas fa-quote-right"></i></p>
                                                <p>
                                                    @yield('naam_1', 'Axl Kesters')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote 2 -->
                                <div @yield("CI-2")>
                                    <div class="quote">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <p><i class="fas fa-quote-left"></i>
                                                    @yield('testimonial_2', 'Jyle has helped us develop a professional and beautiful website which showcases our organization very well.')
                                                    <i class="fas fa-quote-right"></i></p>
                                                <p>
                                                    @yield('naam_2', 'Axl Kesters')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote 3 -->
                                <div @yield("CI-3")>
                                    <div class="quote">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <p><i class="fas fa-quote-left"></i>
                                                    @yield('testimonial_3', 'Jyle has helped us develop a professional and beautiful website which showcases our organization very well.')
                                                    <i class="fas fa-quote-right"></i></p>
                                                <p>
                                                    @yield('naam_3', 'Axl Kesters')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote 4 -->
                                <div @yield("CI-4")>
                                    <div class="quote">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <p><i class="fas fa-quote-left"></i>
                                                    @yield('testimonial_4','Jyle has helped us develop a professional and beautiful website which showcases our organization very well.')
                                                    <i class="fas fa-quote-right"></i></p>
                                                <p>
                                                    @yield('naam_4','Axl Kesters')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote 5 -->
                                <div @yield("CI-5")>
                                    <div class="quote">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <p><i class="fas fa-quote-left"></i>
                                                    @yield('testimonial_5')
                                                    <i class="fas fa-quote-right"></i></p>
                                                <p>
                                                    @yield('naam_5')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote 6 -->
                                <div @yield("CI-6")>
                                    <div class="quote">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <p><i class="fas fa-quote-left"></i>
                                                    @yield('testimonial_6')
                                                    <i class="fas fa-quote-right"></i></p>
                                                <p>
                                                    @yield('naam_6')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                @yield('foto_1')
                                @yield('foto_2')
                                @yield('foto_3')
                                @yield('foto_4')
                                @yield('foto_5')
                                @yield('foto_6')
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
    </div>
</section>

<!-- projecten -->
<section class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>Voorbeelden</h2>
            <p>Projecten</p>
        </div>


        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                @yield('foto_project_1')
                            </a>
                            <div class="portfolio-caption">
                                @yield('titel_project_1')
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4" @yield("actief_project_2")>
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                @yield('foto_project_2')
                            </a>
                            <div class="portfolio-caption">
                                @yield('titel_project_2')
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4" @yield("actief_project_3")>
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                @yield('foto_project_3')
                            </a>
                            <div class="portfolio-caption">
                                @yield('titel_project_3')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    </div>

</section>

{{--<section class="onderkant">--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <h1 class="col-12">Links</h1>--}}
{{--            <p class="line-orange"></p>--}}
{{--            <p>@yield('inhoud_links')</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}


<!-- Portfolio Modals-->
<!-- Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="/assets/img/cancel.svg"
                                                               alt="Close modal"/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            @yield('inhoud_titel_1')
                            @yield('inhoud_tag_1')

                            @yield('inhoud_foto_1')
                            @yield('inhoud_tekst_1')
                            <ul class="list-inline">
                                @yield('inhoud_link_1')
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
<!-- Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="/assets/img/cancel.svg"
                                                               alt="Close modal"/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            @yield('inhoud_titel_2')
                            @yield('inhoud_tag_2')

                            @yield('inhoud_foto_2')
                            @yield('inhoud_tekst_2')
                            <ul class="list-inline">
                                @yield('inhoud_link_2')
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
<!-- Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="/assets/img/cancel.svg"
                                                               alt="Close modal"/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            @yield('inhoud_titel_3')
                            @yield('inhoud_tag_3')

                            @yield('inhoud_foto_3')
                            @yield('inhoud_tekst_3')
                            <ul class="list-inline">
                                @yield('inhoud_link_3')
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

{{--  Footer  --}}
@extends('shared.footer')

