<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" />--}}
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    @include('shared.icons')
    <title>@yield('title', 'IT Factory | Internet of Things')</title>
</head>
<body>

@extends('opleidingen.bachelor.layouts.template_keuzerichting')

@section('banner')
    <div class="bannerKeuzerichting"></div>
    <style>.bannerKeuzerichting {
            padding: 10rem 0;
            background: linear-gradient(to bottom, rgba(22, 22, 22, .1) 0, rgba(22, 22, 22, .5) 75%, #161616 100%), url(../assets/img/banner_iot.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: scroll;
            background-size: cover;
        }</style>
@endsection

@section('titelPagina')
    Internet Of Things
@endsection

@section('inhoud_over')
    Combineer je graag elektronica met IT? Dan is de afstudeerrichting Internet of Things echt je ding! Ga aan de slag
    met elektronische componenten en leer onder meer al doende hoe je een smart home installeert! <br><br>
    Werken met elektronica houdt in dat je ook een goede kennis van netwerken hebt en van programmeren. Daarom dat in je
    eerste jaar de basis van deze verschillende IT-disciplines wordt aangeleerd. Eens deze basis gelegd start de
    ontdekkingsreis binnen de wereld van de embedded devices en software driven IoT. <br><br>
    Technologieën als Smart Home Automation, Embedded Interfacing en programmable IoT devices zijn na je studie geen
    mysterie meer. <br><br>
    Je opleiding succesvol afgerond? Dan kan je direct aan de slag als embedded software engineer, smart home app
    developer of IoT engineer. Toch nog zin om verder te studeren? Dan kan je eventueel een extra bachelor of een
    masterdiploma behalen. Zo ligt de master Industriële Wetenschappen of Information Management zeker binnen de
    mogelijkheden. <br><br>
    Wil je graag meer weten over deze afstudeerrichting? <a target="_blank"
                                                            href="https://www.thomasmore.be/opleidingen/professionele-bachelor/elektronica-ict/internet-things">Kijk
        dan hier voor meer info</a>.

@endsection
@section('extra_over')
    <img src="/assets/img/pic_iot.jpg" alt="over ons" class="responsive groot_scherm">
@endsection

@section('promofilm_keuzerichting')
    <iframe id="discord" class="centerYoutube" width="100%" height="650px"
            src="https://www.youtube.com/embed/aAWLZi2LapY" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
@endsection

{{--Testimonials--}}
@section('testimonial_1')
    Een interessante richting om te studeren, het is tof om meer te weten te komen over al die onderdelen in IoT en het
    automatiseren in KNX. Naast KNX zijn er nog vele andere toffe en interessante vakken. De IT Factory, een echte
    aanrader!
@endsection
@section('naam_1')
    Robin Van de Velde - 2 IOT
@endsection
@section('foto_1')
    <li data-target="#quote-carousel" data-slide-to="0" class="active"><img
            class="img-fluid"
            src="/assets/img/testimonials/robin.jpg"
            alt="Robin Van de Velde">
    </li>
@endsection

@section("CI-2")
    class="carousel-item"
@endsection
@section('testimonial_2')
    School voelt steeds minder als een verplichting maar eerder als een hobby, daar heeft de ITF-community zeker voor
    gezorgd!
    In het begin van ITF had ik schrik om me niet thuis te voelen en mijn draai niet te kunnen vinden maar daar is niks
    van waar.
    De opleiding is een goede combinatie van praktijk en theoretische oefeningen waardoor je later goed voorbereid bent
    op het werkveld.
@endsection
@section('naam_2')
    Jeroen Weber - 2 IOT
@endsection
@section('foto_2')
    <li data-target="#quote-carousel" data-slide-to="1"><img
            class="img-fluid"
            src="/assets/img/testimonials/jeroen.jpg"
            alt="Jeroen Weber">
    </li>
@endsection

@section("CI-3")
    class="carousel-item"
@endsection
@section('testimonial_3')
    IoT is de richting voor diegene die niet heel de dag hetzelfde wil doen.
    De diversiteit is enorm, van het leren hoe bluetooth in elkaar zit tot het besturen van een robotarm.
    De richting is zeer praktisch met veel hands-on projecten en lessen wat ook een groot pluspunt is.
@endsection
@section('naam_3')
    Brent Van der Steen – Alumnus
@endsection
@section('foto_3')
    <li data-target="#quote-carousel" data-slide-to="2"><img
            class="img-fluid"
            src="/assets/img/testimonials/brent.jpg"
            alt="Brent Van der Steen">
    </li>
@endsection

@section("CI-4")
    class="carousel-item"
@endsection
@section('testimonial_4')
    IT Factory, een plaats waar je je inner nerd helemaal kan laten gaan! Als kind droomde ik er al van om uitvinder te
    worden en in de IT Factory kan ik mijn droom waarmaken. Je kan hier zo groot dromen als je wil!
@endsection
@section('naam_4')
    Pepijn Wirges – 2 IOT
@endsection
@section('foto_4')
    <li data-target="#quote-carousel" data-slide-to="3"><img
            class="img-fluid"
            src="/assets/img/testimonials/pepijn.jpg"
            alt="Pepijn Wirges">
    </li>
@endsection

@section("CI-5")
    class="carousel-item"
@endsection
@section('testimonial_5')
    Ikzelf ben de richting gestart zonder voorkennis, maar ik heb helemaal niet het gevoel gehad dat voorkennis een
    vereiste is De docenten nemen de tijd om iedereen mee te krijgen, zonder dat het vertragend werkt voor de mensen met
    voorkennis. Als je met een probleem zit kan je altijd terecht bij de docenten of opleidingshoofd. Er wordt
    geluisterd naar iedereen, waardoor je jezelf geen nummer voelt. Ik kan de richting alleen maar aanraden!
@endsection
@section('naam_5')
    Yoni Praats – Alumnus
@endsection
@section('foto_5')
    <li data-target="#quote-carousel" data-slide-to="4"><img
            class="img-fluid"
            src="/assets/img/testimonials/yoni.jpg"
            alt="Yoni Praats">
    </li>
@endsection

@section("CI-6")
    class="carousel-item"
@endsection
@section('testimonial_6')
    IT Factory the place to be. Hier krijg je veel toffe vakken van programmeren tot embedded devices. Naast de
    interessante lessen krijg je ook vele kansen om jezelf uit te dagen. Dit kan gaan van verschillende hackathons tot
    leuk project werk met klasgenoten. De IT Factory is een superleuke opleiding en zeker een aanrader!
@endsection
@section('naam_6')
    Thiemo Cumps – 2 IOT
@endsection
@section('foto_6')
    <li data-target="#quote-carousel" data-slide-to="5"><img
            class="img-fluid"
            src="/assets/img/testimonials/thiemo.jpg"
            alt="Thiemo Cumps">
    </li>
@endsection

{{--Projecten--}}
{{--Projecten--}}
@section('filter')iot @endsection
@section('projecten')
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
@endsection

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
