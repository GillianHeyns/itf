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
                <div class="col-12">
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
                                @foreach($testimonies as $count => $testimony)
                                    <!-- Quote {{$testimony->testimony_studentnaam}}-->
                                        <div class="carousel-item @if ($loop->index === 0) active @endif">
                                            <div class="quote">
                                                <div class="row">
                                                    <div class="col-md-8 col-md-offset-2">
                                                        <p><i class="fas fa-quote-left"></i>
                                                            {{$testimony->testimony_tekst}}
                                                            <i class="fas fa-quote-right"></i></p>
                                                        <p>
                                                            {{$testimony->testimony_studentnaam}}
                                                            - {{$testimony->testimony_studierichting}} ({{$testimony->testimony_jaar}})
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
                                    <li data-target="#quote-carousel" data-slide-to="{{$loop->index}}" class="@if ($loop->index === 0) active @endif"><img
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
    </div>
</section>

<!-- projecten -->
<section class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>Projecten</h2>
            <p>Portfolio</p>
        </div>
        <!-- Portfolio Grid-->
        <script>
            $(document).ready(function () {
                $('div[class*="filter"]').hide();
                $(".filter-@yield('filter')").show();
            });
        </script>
        <section class="page-section bg-light row portfolio-container" id="portfolio">
        @foreach($data as $project)
            <!-- Modal {{$project->titel}}-->
                <div
                    class="col-lg-4 col-sm-6 mb-4 @foreach($project->project_tags as $tag)filter-{{strtolower($tag->tag_naam)}} @endforeach">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$project->id}}">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img
                                onerror="this.onerror=null; this.src='/uploads/projects/unknownproject.jpg'"
                                class="img-fluid"
                                src="/@foreach($project->photos as $photo){{substr(explode(',',$photo->foto_link)[0],2,-1)}}@endforeach"
                                alt='@foreach($project->photos as $photo){{$photo->foto_beschrijving}}@endforeach'/>
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading">{{$project->titel}}</div>
                            <div class="portfolio-caption-subheading text-muted">
                            </div>
                            <div class="portfolio-caption-subheading">
                                <a class="portfolio-link" data-toggle="modal" href="#portfolioModal{{$project->id}}">
                                    <button class="col-md-12 btn btn-outline-dark">
                                        Meer info
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
        @endforeach

        <!-- Portfolio Modals-->
        @foreach($data as $project)
            <!-- Modal {{$project->titel}}-->
                <div class="portfolio-modal modal fade" id="portfolioModal{{$project->id}}" tabindex="-1" role="dialog"
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
                                            <h2 class="text-uppercase">{{$project->titel}}</h2>
                                            <p class="item-intro text-muted">
                                                @foreach($project->project_tags as $tag)
                                                    - {{strtoupper($tag->tag_naam)}}
                                                @endforeach
                                                -
                                            </p>
                                            <img
                                                onerror="this.onerror=null; this.src='/uploads/projects/unknownproject.jpg'"
                                                style="border: 2px solid #eee;border-radius: 0.25rem;"
                                                class="img-fluid d-block mx-auto"
                                                src="/@foreach($project->photos as $photo){{substr(explode(',',$photo->foto_link)[0],2,-1)}}@endforeach"
                                                alt='Foto 1 van project "{{$project->titel}}"'/>
                                            <p>{{$project->beschrijving}}</p>
                                            <img
                                                onerror="this.onerror=null; this.style='visibility: hidden; margin:0;'"
                                                style="border: 2px solid #eee;border-radius: 0.25rem;"
                                                class="img-fluid d-block mx-auto"
                                                src="/@foreach($project->photos as $photo){{substr(explode(',',$photo->foto_link)[1],1,-1)}}@endforeach"
                                                alt='Foto 2 van project "{{$project->titel}}"'/>
                                            <img
                                                onerror="this.onerror=null; this.style='visibility: hidden; margin:0;'"
                                                style="border: 2px solid #eee;border-radius: 0.25rem;"
                                                class="img-fluid d-block mx-auto"
                                                src="/@foreach($project->photos as $photo){{substr(explode(',',$photo->foto_link)[2],1,-1)}}@endforeach"
                                                alt='Foto 3 van project "{{$project->titel}}"'/>
                                            <img
                                                onerror="this.onerror=null; this.style='visibility: hidden; margin:0;'"
                                                style="border: 2px solid #eee;border-radius: 0.25rem;"
                                                class="img-fluid d-block mx-auto"
                                                src="/@foreach($project->photos as $photo){{substr(explode(',',$photo->foto_link)[3],1,-1)}}@endforeach"
                                                alt='Foto 4 van project "{{$project->titel}}"'/>
                                            <img
                                                onerror="this.onerror=null; this.style='visibility: hidden; margin:0;'"
                                                style="border: 2px solid #eee;border-radius: 0.25rem;"
                                                class="img-fluid d-block mx-auto"
                                                src="/@foreach($project->photos as $photo){{substr(explode(',',$photo->foto_link)[4],1,-1)}}@endforeach"
                                                alt='Foto 5 van project "{{$project->titel}}"'/>
                                            <p>
                                                <a href="{{$project->hyperlink}}"
                                                   target="_blank">{{$project->hyperlink_naam}}</a>
                                            </p>
                                            <button class="btn btn-outline-dark" data-dismiss="modal" type="button">
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
            @endforeach
        </section>
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

{{--  Footer  --}}
@extends('shared.footer')

