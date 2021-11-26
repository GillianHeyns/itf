@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Edit tag')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    @foreach($tag as $tag)
                        <div
                            class="card-header">{{ __('Edit tag') }} {{ $tag->id }}{{ __(':') }} {{ $tag->tag_naam}}</div>
                        <div class="card-body">
                            <form action="{{ $tag->id }}/confirm" method="post">
{{--                            <form action="/admin/cms-tags" method="post">--}}
                                @csrf
{{--                                <div class="d-flex justify-content-around">--}}
{{--                                    <a role="button" href='/admin/cms-tags/delete/{{ $tag->id }}/confirm'--}}
{{--                                       class="col-4 btn btn-danger btn-sm">Delete</a>--}}
{{--                                    <a role="button" href="/admin/cms-tags"--}}
{{--                                       class="col-4 btn btn-success btn-sm">Annuleer</a>--}}
{{--                                </div>--}}

                                <div class="form-group row">
                                    <label for="naam" class="col-md-4 col-form-label text-md-right">Tag: </label>
                                    <div class="col-md-6">
                                        <input value="{{ $tag->tag_naam}}" type="text" id="naam" name="naam"
                                               class="form-control @error('naam') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-end">
                                    <div class="col-md-4">
                                        <a role="button" href="/admin/cms-tags" class="col-md-12 btn btn-danger">
                                            Annuleer
                                        </a>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="submit" class="col-md-12 m-0 btn btn-success">
                                            {{ __('Save') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('navigation-fixed', 'fixed-bottom')
