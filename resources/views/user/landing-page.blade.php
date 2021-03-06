@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Welcome!')

@section('main')
    <main class="container mt-3">
        <div class="text-center">
            <div class="m-5"></div>
            <h1 class="display-4 mt-4 mb-4" style="font-family: Nunito;">Welkom {{ auth()->user()->name }}!</h1>
            <div class="m-5"></div>

            <div class="row justify-content-around">
                <a href="/admin/cms" style="color: black; text-decoration: none;">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/img/itfactory_interactive/ITF_visual_new.jpg"
                             alt="Card image CMS">
                        <div class="card-body">
                            <h5 class="card-title text-bold">CMS</h5>
                            <p class="card-text">Beheer van projecten, getuigenissen, tags, etc.</p>
                        </div>
                    </div>
                </a>
                <a href="#" style="color: black; text-decoration: none;">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/img/itfactory_interactive/ITF_robot.jpg"
                             alt="Card image CMS">
                        <div class="card-body">
                            <h5 class="card-title text-bold">DI APP</h5>
                            <p class="card-text">Toegang tot<br>DI-APP</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </main>
@endsection

@section('navigation-fixed', 'fixed-bottom')
