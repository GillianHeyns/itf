
        <!-- ======= Testimonials Section ======= -->
 <section class="call-to-action bg-darkblue">
     <div class="container" data-aos="fade-up">
         <div class="section-title">
             <h2>GETUIGENISSEN</h2>
             <p>Aan het woord</p>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center text-faded" role="listbox">
                        <!-- Quote 1 -->
                        @include('layouts.template_testimonials_qoute')
                        <!-- Quote 2 -->
                        @include('layouts.template_testimonials_qoute')
                        <!-- Quote 3 -->
                        @include('layouts.template_testimonials_qoute')
                        <!-- Quote 4 -->
                        @include('layouts.template_testimonials_qoute')
                        <!-- Quote 5 -->
                        @include('layouts.template_testimonials_qoute')
                    </div>
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-fluid" src="assets/img/testimonials/testimonials-1.jpg" alt="NAAM">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-fluid" src="assets/img/testimonials/testimonials-2.jpg" alt="NAAM">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-fluid" src="assets/img/testimonials/testimonials-3.jpg" alt="NAAM">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="3"><img class="img-fluid" src="assets/img/testimonials/testimonials-4.jpg" alt="NAAM">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="4"><img class="img-fluid" src="assets/img/testimonials/testimonials-5.jpg" alt="NAAM">
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

