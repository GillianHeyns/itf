@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | CMS')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    <div class="card-header">{{ __('Overzicht content') }}</div>

                    <div class="card-body">

                        <form action="">
                            <a href=""><button type="button" class="btn btn-success col-2 p-1">Nieuw</button></a>
                            <span class="float-right col-4">
                                <input type="text" id="search" placeholder="search here..." name="search" class="col-7">
                                <button type="submit" class="col-4 p-1">Zoeken</button>
                            </span>
                        </form>
                    </div>
                    <div class="card-body text-bold border-top pt-2 pb-2">
                        Naam
                    </div>
                    <div class="card-body border-top pt-2 pb-2 bg-gray">

                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">

                        <a href="">Mainnav </a>
                        <span class="float-right">
                            <a href=""><i class="fas fa-pen pr-2"></i></a>
                            <a href=""><i class="fas fa-times "></i></a>
                        </span>
                    </div>
                    <div class="card-body border-top pt-2 pb-2">
                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">
                        <a href="">Infotekst </a>
                        <span class="float-right">
                            <a href=""><i class="fas fa-pen pr-2"></i></a>
                            <a href=""><i class="fas fa-times "></i></a>
                        </span>
                    </div>

{{--                    <!-- voorbeeld tekst -->--}}
{{--                    <div class="card-body border-top pt-2 pb-2 bg-gray">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">Stuvo </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-top pt-2 pb-2">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">Atomos </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-top pt-2 pb-2 bg-gray">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">CCS </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-top pt-2 pb-2">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">App </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-top pt-2 pb-2 bg-gray">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">Digital innovation </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-top pt-2 pb-2">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">Infotekst </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-top pt-2 pb-2 bg-gray">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">Opendeurdag </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-top pt-2 pb-2">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">Campus </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-top pt-2 pb-2 bg-gray">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">Hackaton </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-top pt-2 pb-2">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">Discord </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-top pt-2 pb-2 bg-gray">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">Teams </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
{{--                    <div class="card-body border-top pt-2 pb-2">--}}
{{--                        <input type="checkbox" id="id1" name="id1" value="true" class="mr-3">--}}
{{--                        <a href="">Fietsen </a>--}}
{{--                        <span class="float-right">--}}
{{--                            <a href=""><i class="fas fa-pen pr-2"></i></a>--}}
{{--                            <a href=""><i class="fas fa-times "></i></a>--}}
{{--                        </span>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
