@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | CMS - Tags')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    <ul class="nav nav-tabs font-weight-bold">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="cms" style="color: #3F3F3F;">Projecten</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cms-testimonies" style="color: #3F3F3F;">Getuigenissen</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="cms-tags">Tags</a>
                        </li>
                        {{--                            <li class="nav-item">--}}
                        {{--                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>--}}
                        {{--                            </li>--}}
                    </ul>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-2 dropdown">
                                <button class="col-12 btn dropdown-toggle btn-success p-1" type="button"
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                    Nieuw
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/admin/nieuw-project">Project</a>
                                    <a class="dropdown-item" href="/admin/nieuw-getuigenis">Getuigenis</a>
                                    <a class="dropdown-item" href="/admin/nieuw-tag">Tag</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th class="text-center card-body text-bold border-top pt-2 pb-2" scope="col"
                                style="width: 4rem;">#
                            </th>
                            <th class="card-body text-bold border-top pt-2 pb-2" scope="col">Tag</th>
                            <th class="card-body text-bold border-top pt-2 pb-2" scope="col"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $tag)
                            <tr>
                                <th class="text-center font-weight-normal" scope="row">{{$tag->id}}</th>
                                <td><a href="/admin/cms-tags/{{$tag->id}}">{{$tag->tag_naam}}</a></td>
                                <td>
                                    <a href="/admin/cms-tags/{{$tag->id}}"><i class="fas fa-pen pr-2"></i></a>
                                    <a href="/admin/cms-tags/delete/{{$tag->id}}"><i class="fas fa-times "></i></a>
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

<style>
    body {
        position: relative;
    }

    body::after {
        content: '';
        display: block;
        height: 50px; /* Set same as footer's height */
    }

    footer {
        position: absolute;
        bottom: 0;
        width: 100%;
        height: 50px;
    }
</style>
