@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Home')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    @foreach($tag as $tag)
                        <div
                            class="card-header">{{ __('Delete tag') }} {{ $tag->id }}{{ __(':') }} {{ $tag->tag_naam}}</div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <p class="row">Weet je zeker dat je de tag "<span
                                        class="font-weight-bold">{{ $tag -> tag_naam }}</span>" wil verwijderen?</p>
                            </div>

                            <div class="d-flex justify-content-around">
                                <a role="button" href='/admin/cms-tags/delete/{{ $tag->id }}/confirm'
                                   class="col-4 btn btn-danger btn-sm">Delete</a>
                                <a role="button" href="/admin/cms-tags"
                                   class="col-4 btn btn-success btn-sm">Annuleer</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('navigation-fixed', 'fixed-bottom')
