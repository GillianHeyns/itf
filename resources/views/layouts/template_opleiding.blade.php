{{--made by axl kesters--}}
{{--Deze pagina is de template die de algemene layout van de body van de pagina's opleidingen bepaalt. Deze inhoud wordt aan de hand van gaps gemaakt, die in te vullen zijn per pagina.--}}
{{--In deze pagina word ook de template "template_testimonials" gebruikt. Deze template zorgt voor een werkende carousel met testimonials, hier moet nog per pagina aanpassingen aan gedaan worden.--}}
{{--  Navigation  --}}
@include('shared.navigation')

<section class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>INFO</h2>
            <p>@yield('titelPagina')</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-8">
                <p>@yield('inhoud_over','Over ons tekst')</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
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
                                                    @yield('testimonial_1','Jyle has helped us develop a professional and beautiful website which showcases our organization very well.')
                                                    <i class="fas fa-quote-right"></i></p>
                                                <p>
                                                    @yield('naam_1','Axl Kesters')
                                                </p>
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
                                                    @yield('testimonial_2','Jyle has helped us develop a professional and beautiful website which showcases our organization very well.')
                                                    <i class="fas fa-quote-right"></i></p>
                                                <p>
                                                    @yield('naam_2','Axl Kesters')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quote 3 -->
                                <div class="carousel-item">
                                    <div class="quote">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <p><i class="fas fa-quote-left"></i>
                                                    @yield('testimonial_3','Jyle has helped us develop a professional and beautiful website which showcases our organization very well.')
                                                    <i class="fas fa-quote-right"></i></p>
                                                <p>
                                                    @yield('naam_3','Axl Kesters')
                                                </p>
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
                                <div class="carousel-item">
                                    <div class="quote">
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2">
                                                <p><i class="fas fa-quote-left"></i>
                                                    @yield('testimonial_5','Jyle has helped us develop a professional and beautiful website which showcases our organization very well.')
                                                    <i class="fas fa-quote-right"></i></p>
                                                <p>
                                                    @yield('naam_5','Axl Kesters')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"><img
                                        class="img-fluid"
                                        src="../assets/img/testimonials/testimonials-1.jpg"
                                        alt="NAAM">
{{--                                    @yield('foto_1')--}}
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="1">
                                    <img
                                        class="img-fluid"
                                        src="../assets/img/testimonials/testimonials-2.jpg"
                                        alt="NAAM">
{{--                                    @yield('foto_2')--}}
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="2">
                                    <img
                                        class="img-fluid"
                                        src="../assets/img/testimonials/testimonials-3.jpg"
                                        alt="NAAM">
{{--                                    @yield('foto_3')--}}
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="3">
                                    <img
                                        class="img-fluid"
                                        src="../assets/img/testimonials/testimonials-4.jpg"
                                        alt="NAAM">
{{--                                    @yield('foto_4')--}}
                                </li>
                                <li data-target="#quote-carousel" data-slide-to="4">
                                    <img
                                        class="img-fluid"
                                        src="../assets/img/testimonials/testimonials-5.jpg"
                                        alt="NAAM">
{{--                                    @yield('foto_5')--}}
                                </li>
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
                                    <img class="img-fluid" src="/assets/img/portfolio/unknownproject.jpg" alt=""/>
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Threads</div>
                                    <div class="portfolio-caption-subheading text-muted">Illustration</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="/assets/img/portfolio/unknownproject.jpg" alt=""/>
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Explore</div>
                                    <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="/assets/img/portfolio/unknownproject.jpg" alt=""/>
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Finish</div>
                                    <div class="portfolio-caption-subheading text-muted">Identity</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="/assets/img/portfolio/unknownproject.jpg" alt=""/>
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Lines</div>
                                    <div class="portfolio-caption-subheading text-muted">Branding</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="/assets/img/portfolio/unknownproject.jpg" alt=""/>
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Southwest</div>
                                    <div class="portfolio-caption-subheading text-muted">Website Design</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="/assets/img/portfolio/unknownproject.jpg" alt=""/>
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">Test</div>
                                    <div class="portfolio-caption-subheading text-muted">Photography</div>
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
                <div class="close-modal" data-dismiss="modal"><img src="/assets/img/cancel.svg" alt="Close modal"/></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="/assets/img/portfolio/unknownproject.jpg" alt=""/>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
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
                <div class="close-modal" data-dismiss="modal"><img src="/assets/img/cancel.svg" alt="Close modal"/></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/02-full.jpg" alt=""/>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Explore</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
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
                <div class="close-modal" data-dismiss="modal"><img src="/assets/img/cancel.svg" alt="Close modal"/></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/03-full.jpg" alt=""/>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Finish</li>
                                    <li>Category: Identity</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
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
                <div class="close-modal" data-dismiss="modal"><img src="/assets/img/cancel.svg" alt="Close modal"/></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/04-full.jpg" alt=""/>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Lines</li>
                                    <li>Category: Branding</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
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
                <div class="close-modal" data-dismiss="modal"><img src="/assets/img/cancel.svg" alt="Close modal"/></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/05-full.jpg" alt=""/>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Southwest</li>
                                    <li>Category: Website Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
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
                <div class="close-modal" data-dismiss="modal"><img src="/assets/img/cancel.svg" alt="Close modal"/></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/06-full.jpg" alt=""/>
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt
                                    repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae,
                                    nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Window</li>
                                    <li>Category: Photography</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<section>--}}
{{--    <div class="container">--}}
{{--        <div class="row">--}}
{{--            <h1 class="col-12">Links</h1>--}}
{{--            <p class="line-orange"></p>--}}
{{--            <p>@yield('inhoud_links')</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--  Footer  --}}
@extends('shared.footer')

