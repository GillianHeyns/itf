<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    @include('shared.icons')
    <title>@yield('title', 'IT Factory | Dagopleiding')</title>
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigation')

<section id="faciliteiten" class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>Dagopleiding</h2>
            <p>Bachelor</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 content">

                <p class="font-italic">De IT Factory is de gemeenschappelijke richting Elektronica/ICT – Toegepaste Informatica van Thomas More hogeschool campus Geel.
                    <br>Wij bieden aan:</p>
                <ul>
                    <li><a style="color:black; font-weight:bold;" href="./dagopleiding/app"><i class="far fa-check-circle"></i> Application Development:</a>
                        when programming rocks your world!
                    </li>
                    <li><a style="color:black; font-weight:bold;" href="./dagopleiding/ai"><i class="far fa-check-circle"></i> Artificial Intelligence:</a>
                        when data and machine learning moves you!
                    </li>
                    <li><a style="color:black; font-weight:bold;" href="./dagopleiding/ccs"><i class="far fa-check-circle"></i> Cloud & Cyber Security:</a>
                        when you want to make the internet a safer place!
                    </li>
                    <li><a style="color:black; font-weight:bold;" href="./dagopleiding/di"><i class="far fa-check-circle"></i> Digital Innovation:</a>
                        when you want to go that extra mile!
                    </li>
                    <li><a style="color:black; font-weight:bold;" href="./dagopleiding/iot"><i class="far fa-check-circle"></i> Internet Of Things:</a>
                        when you want to make the world smarter!
                    </li>
                </ul>
                <p>Ben je geprikkeld door onze afstudeerrichtingen? Bekijk dan vlug enkele van onze projecten op onze portfoliopagina.</p>
                <ul>
                    <li><a style="color:black; font-weight:bold;" href="./projecten"><i class="far fa-check-circle"></i> Projecten</a></li>
                </ul>
            </div>
            <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
                <img src="assets/img/itfactory_interactive/ITF_visual_new.jpg" class="groot_scherm img-fluid"
                     alt="ITFactory">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="col-12">
            <iframe id="discord" class="centerYoutube" width="100%" height="450px"
                    src="https://www.youtube.com/embed/z4U2hrULu7c" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
        </div>
    </div>
</section>

{{--  Footer  --}}
@include('shared.footer')
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>--}}
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
