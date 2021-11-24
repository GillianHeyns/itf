@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Home')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    @foreach($project as $project)
                        <div
                            class="card-header">{{ __('Delete project') }} {{ $project->id }}{{ __(':') }} {{ $project->titel}}</div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <p class="row">Weet je zeker dat je het project "<span
                                        class="font-weight-bold">{{ $project -> titel }}</span>" wil verwijderen?</p>
                            </div>

                            <div class="d-flex justify-content-around">
{{--                                <button class="m-0 col-4 btn btn-danger btn-sm">Delete</button>--}}
                                <a role="button" href="/admin/cms/delete/confirm" class="col-4 btn btn-danger btn-sm">Annuleer</a>
                                <a role="button" href="/admin/cms" class="col-4 btn btn-success btn-sm">Annuleer</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('navigation-fixed', 'fixed-bottom')
