<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/app.css')}}">
    @include('shared.icons')
    <title>@yield('title', 'IT Factory | Faciliteiten')</title>
</head>
<body>
{{--  Navigation  --}}
@include('shared.navigation')

<section id="faciliteiten" class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>Student facilities</h2>
            <p>Stuvo</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 content">

                <p>Stuvo is your buddy for a successful college life! The department for student counselling helps you
                    with all questions regarding:</p>
                <ul>
                    <li><i class="far fa-check-circle"></i> Financing your education</li>
                    <li><i class="far fa-check-circle"></i> How to study</li>
                    <li><i class="far fa-check-circle"></i> Transportation</li>
                    <li><i class="far fa-check-circle"></i> Student dorms</li>
                </ul>
                <p>Are you worrying or looking for someone to tell your story? Our student counsellors are waiting. It
                    is free and everything you say is confidential!</p>
                <pFeeling more like having fun? Stuvo organises a bunch of sports and cultural activities on and around
                          your campus. If you want to organise something yourself and you are looking for some funding,
                          then Stuvo can help as well.
                </p>
                <p>Need more info? Contact us via: <a href="mailto:stuvo@thomasmore.be">stuvo@thomasmore.be</a></p>
            </div>
            <div class="col-sm-12 col-md-6 ">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/tlxKsBJ-oKw" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>
<section id="faciliteiten" class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>Student care</h2>
            <p>Tailor-made study</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img src="assets/img/faciliteiten/zorg.jpg" id="afstandFoto" width="500px" height="auto"
                     alt="zorgcoördinatie" class="responsive groot_scherm">
            </div>
            <div class="col-sm-12 col-md-6 content">
                <p>To give everyone an equal chance on a successful education, some students require more individual
                    care during class, internships, or exams. For instance, extra care can be provided to professional
                    athletes, students with learning disorders, mental or physical handicaps, artists, non-English
                    natives, entrepreneurs, etc… Each case is individual and for each student in need of extra care
                    receives an individual care package.</p>
                <p>Your personal liaison is the care coordinator. He or she invites you for a brief intake interview
                    during which you can discus what you think would benefit you most. Based on that intake
                    conversation, a personal package is planned out, which can be altered during your time with us if
                    needed.</p>
                <p>The procedure and requirements to be eligible for care differ based on the situation you are in. If
                    you want more information or if you want a personal conversation with on of our care coordinators,
                    then please get in touch and we will take it from there!</p>
                <p>More info: <a
                        href="https://thomasmore365.sharepoint.com/sites/s.itfactory/SitePages/Studeren-op-maat.aspx"
                        target="_blank">Studying with care</a></p>
            </div>
        </div>
    </div>
</section>
<section id="faciliteiten" class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>Student association</h2>
            <p>EMT</p>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6 content">
                <p>We are EMT, fraternity for the unit ‘Technology’ of Thomas More campus Geel. We are an active group
                    of students who try to create an easy and laid-back atmosphere around campus.</p>
                <p>EMT is particularly known for its well organised parties (or as we like to call them “TD’s”), but we
                    do much more! We try to make sure our members look back at their college days with fond memories and
                    friends for life.</p>
                <p>We organise different activities during the year ranging from parties, cantus, drinks, sport, and
                    cultural activities. We also support each other during the exams and when deadlines are due.</p>
                <p>If you want to join us and join the real college life, we advise you to participate in our initiation
                    ritual, lovingly called ‘baptism’. This however is not mandatory, but it really marks the start of
                    your time as a student. You forge friendships for life, and you have a helping community if you have
                    questions about your education, dorm life, etc… Also, you get acquainted with our EMT professional
                    network of Alumni that spans multiple decades.</p>

                <p>If you are interested in who we are, you can find more information on:</p>
                <ul>
                    <li><i class="far fa-check-circle"></i><a href="https://www.facebook.com/StudentenverenigingEMT"
                                                              target="_blank"> Our Facebook page</a></li>
                    <li><i class="far fa-check-circle"></i><a
                            href="https://www.trooper.be/nl/trooperverenigingen/emt-atomos" target="_blank"> Support us on Trooper (completely free)</a></li>
                </ul>
                <p>Ut vivat, crescat et floreat EMT!</p>
            </div>
            <div class="col-sm-12 col-md-6">
                <img src="assets/img/faciliteiten/emt.png" width="500px" height="auto" alt="EMT"
                     class="responsive groot_scherm">
            </div>
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
