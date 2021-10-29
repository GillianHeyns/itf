{{--  Navigation  --}}
@include('shared.navigation')

@yield('banner', 'Geen foto beschikbaar...')
<section class="onderkant">
    <div class="container">
        <div class="section-title">
            <h2>Werken en Studeren</h2>
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


{{--  Footer  --}}
@extends('shared.footer')

