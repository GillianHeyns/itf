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
                        <div class="dropdown">
                            <button class="btn dropdown-toggle btn-success col-2 p-1" type="button"
                                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                Nieuw
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="nieuw-project">Project</a>
                                <a class="dropdown-item" href="nieuw-getuigenis">Getuigenis</a>
                            </div>
                        </div>
                        <span class="float-right col-4">
                                <input type="text" id="search" placeholder="search here..." name="search" class="col-7">
                                <button type="submit" class="col-4 p-1">Zoeken</button>
                            </span>
                    </div>

                    <div class="card-body text-bold border-top pt-2 pb-2">
                        Naam
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th class="text-center card-body text-bold border-top pt-2 pb-2" scope="col">#</th>
                            <th class="card-body text-bold border-top pt-2 pb-2" scope="col">Naam</th>
                            <th class="card-body text-bold border-top pt-2 pb-2" scope="col">Type</th>
                            <th class="card-body text-bold border-top pt-2 pb-2" scope="col">Beschrijving</th>
                            <th class="card-body text-bold border-top pt-2 pb-2" scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <th class="text-center font-weight-normal" scope="row">{{$item->id}}</th>
                                <td><a href="">{{$item->titel}}</a></td>
                                <td>{{$item->beschrijving}}</td>
                                <td>
                                    <a href=""><i class="fas fa-pen pr-2"></i></a>
                                    <a href=""><i class="fas fa-times "></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
