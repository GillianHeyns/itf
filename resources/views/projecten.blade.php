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
                @foreach($tags as $tag)
                    <li style="cursor: pointer;">{{strtoupper($tag->tag_naam)}}</li>
                @endforeach
            </ul>
        </div>
        <div class="row portfolio-container">
            @foreach($dataproject as $project)
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
                                <p>Categorie:<br>@foreach($project->project_tags as $tag)
                                        - {{strtoupper($tag->tag_naam)}}
                                    @endforeach
                                    -
                                </p>
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
            @foreach($dataproject as $project)
            <!-- Modal {{$project->id}}-->
                <div class="portfolio-modal modal fade" id="portfolioModal{{$project->id}}" tabindex="-1" role="dialog"
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
