@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Edit getuigenis')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    @foreach($testimony as $testimony)
                        <div
                            class="card-header">{{ __('Edit getuigenis') }} {{ $testimony->id }}{{ __(':') }} {{ $testimony->testimony_studentnaam}}</div>
                        <div class="card-body">
                            <form action="{{ $testimony->id }}/confirm" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label for="naam"
                                           class="col-md-4 col-form-label text-md-right">Voornaam + naam: </label>
                                    <div class="col-md-6">
                                        <input disabled value="{{ $testimony->testimony_studentnaam}}" type="text"
                                               id="naam"
                                               name="naam"
                                               class="form-control @error('naam') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="studierichting"
                                           class="col-md-4 col-form-label text-md-right">Studierichting: </label>
                                    <div class="col-md-6">
                                        <input value="{{ $testimony->testimony_studierichting}}" type="text"
                                               id="studierichting" name="studierichting"
                                               class="form-control @error('studierichting') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jaar"
                                           class="col-md-4 col-form-label text-md-right">Jaar: </label>
                                    <div class="col-md-6">
                                        <input value="{{ $testimony->testimony_jaar}}" type="text" id="jaar"
                                               name="jaar"
                                               class="form-control @error('jaar') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tekst"
                                           class="col-md-4 col-form-label text-md-right">Tekst: </label>
                                    <div class="col-md-6">
                                    <textarea type="text" id="tekst" name="tekst" style="height: 165px;"
                                              class="form-control @error('tekst') is-invalid @enderror">{{ $testimony->testimony_tekst}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tag"
                                           class="col-md-4 col-form-label text-md-right">Tags: </label>
                                    <div class="col-md-6">
                                        <div style="padding-left: 10px; padding-right: 10px;"
                                             class="row justify-content-start">
                                            @foreach($testimony->testimony_tags as $tag)
                                                <input style="width: 100px;"
                                                       disabled value="{{ $tag -> tag_naam }}"
                                                       type="text"
                                                       id="selectedtag"
                                                       name="selectedtag"
                                                       class="m-1 form-control @error('naam') is-invalid @enderror">
                                            @endforeach
                                        </div>
                                        <select name="tags[]" id="tags" multiple="multiple" style="height: 165px;">
                                            @foreach($tags as $tag)
                                                <option value="{{ $tag -> id }}">{{ $tag -> tag_naam }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="file"
                                           class="col-md-4 col-form-label text-md-right">Foto: </label>
                                    <div class="col-md-6">
                                        <figure>
                                            <img style="border: 2px solid #eee;width: 400px;border-radius: 0.25rem;"
                                                 src="{{ $testimony->file_path}}"
                                                 alt="Foto van {{ $testimony->testimony_studentnaam}}">
                                            <figcaption>Getuigenis {{ $testimony->testimony_studentnaam}}
                                                ({{ $testimony->testimony_jaar}})
                                                - @foreach($testimony->photos as $photo){{ $photo -> foto_beschrijving }}@endforeach</figcaption>
                                        </figure>
                                        <input value="" type="file" id="file" name="file">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto_beschrijving"
                                           class="col-md-4 col-form-label text-md-right">Foto beschrijving: </label>
                                    <div class="col-md-6">
                                    <textarea type="text" id="foto_beschrijving" name="foto_beschrijving"
                                              class="form-control @error('foto_beschrijving') is-invalid @enderror">@foreach($testimony->photos as $photo){{ $photo -> foto_beschrijving }}@endforeach</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6">
                                        <input type="hidden" name="homepage" value="0">
                                        <input value="1" type="checkbox" id="homepage"
                                               name="homepage"
                                               @if(($testimony->homepage) === 1)
                                               checked
                                            @endif>
                                        <label for="homepage"> Tonen op hoofdpagina</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-4"></div>
                                    <div class="col-md-6">
                                        <input type="hidden" name="homepage_EN" value="0">
                                        <input value="1" type="checkbox" id="homepage_EN"
                                               name="homepage_EN"
                                               @if(($testimony->homepage_EN) === 1)
                                               checked
                                            @endif>
                                        <label for="homepage_EN"> Tonen op hoofdpagina [EN]</label>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-4 offset-md-6">
                                        <button type="submit" class="col-md-12 btn btn-primary">
                                            {{ __('Wijzig') }}
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
