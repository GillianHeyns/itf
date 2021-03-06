@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Nieuwe getuigenis')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    <div class="card-header">Nieuwe getuigenis</div>
                    <div class="card-body">
                        <form action="cms-testimonies" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="naam"
                                       class="col-md-4 col-form-label text-md-right">Voornaam + naam: </label>
                                <div class="col-md-6">
                                    <input required type="text" id="naam" name="naam"
                                           class="form-control @error('naam') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="studierichting"
                                       class="col-md-4 col-form-label text-md-right">Studierichting: </label>
                                <div class="col-md-6">
                                    <input required type="text" id="studierichting" name="studierichting"
                                           class="form-control @error('studierichting') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jaar"
                                       class="col-md-4 col-form-label text-md-right">Jaar: </label>
                                <div class="col-md-6">
                                    <input required type="text" id="jaar" name="jaar"
                                           class="form-control @error('jaar') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tekst"
                                       class="col-md-4 col-form-label text-md-right">Tekst: </label>
                                <div class="col-md-6">
                                    <textarea required type="text" id="tekst" name="tekst" style="height: 165px;"
                                              class="form-control @error('tekst') is-invalid @enderror"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tag"
                                       class="col-md-4 col-form-label text-md-right">Selecteer een tag: </label>
                                <div class="col-md-6">
                                    <select required name="tags[]" id="tags" multiple="multiple" style="height: 165px;">
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
                                    <input required type="file" id="file" name="file">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="foto_beschrijving"
                                       class="col-md-4 col-form-label text-md-right">Foto beschrijving: </label>
                                <div class="col-md-6">
                                    <textarea required type="text" id="foto_beschrijving" name="foto_beschrijving"
                                              class="form-control @error('foto_beschrijving') is-invalid @enderror"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4"></div>
                                <div class="col-md-6">
                                    <input type="hidden" name="homepage" value="0">
                                    <input value="1" type="checkbox" id="homepage"
                                           name="homepage"> <label for="homepage">Tonen op hoofdpagina</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4"></div>
                                <div class="col-md-6">
                                    <input type="hidden" name="homepage_EN" value="0">
                                    <input value="1" type="checkbox" id="homepage_EN"
                                           name="homepage_EN"> <label for="homepage_EN">Tonen op hoofdpagina [EN]</label>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-4 offset-md-6">
                                    <button type="submit" class="col-md-12 btn btn-primary">
                                        {{ __('Toevoegen') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
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
