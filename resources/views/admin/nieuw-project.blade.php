@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Nieuw project')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    <div class="card-header">Nieuw project</div>
                    <div class="card-body">
                        <form action="cms" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="titel" class="col-md-4 col-form-label text-md-right">Titel: </label>
                                <div class="col-md-6">
                                    <input required type="text" id="titel" name="titel"
                                           class="form-control @error('titel') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="beschrijving"
                                       class="col-md-4 col-form-label text-md-right">Beschrijving: </label>
                                <div class="col-md-6">
                                    <textarea required type="text" id="beschrijving" name="beschrijving"
                                              class="form-control @error('beschrijving') is-invalid @enderror"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hyperlink" class="col-md-4 col-form-label text-md-right">Hyperlink: </label>
                                <div class="col-md-6">
                                    <input type="text" id="hyperlink" name="hyperlink"
                                           class="form-control @error('hyperlink') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hyperlink_naam" class="col-md-4 col-form-label text-md-right">Hyperlink naam: </label>
                                <div class="col-md-6">
                                    <input type="text" id="hyperlink_naam" name="hyperlink_naam"
                                           class="form-control @error('hyperlink_naam') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tag"
                                       class="col-md-4 col-form-label text-md-right">Selecteer een tag of meerdere tags: </label>
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
                                       class="col-md-4 col-form-label text-md-right">Foto's: </label>
                                <div class="col-md-6">
                                    <input required multiple="multiple" type="file" id="file" name="file[]">
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
