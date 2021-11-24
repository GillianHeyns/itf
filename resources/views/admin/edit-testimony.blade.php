@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Edit')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    <div class="card-header">{{ __('Edit') }} {{ $id }}</div>

                    <div class="card-body">

                        <form action="submit1" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="naam"
                                       class="col-md-4 col-form-label text-md-right">Voornaam + naam: </label>
                                <div class="col-md-6">
                                    <input type="text" id="naam" name="naam"
                                           class="form-control @error('naam') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="studierichting"
                                       class="col-md-4 col-form-label text-md-right">Studierichting: </label>
                                <div class="col-md-6">
                                    <input type="text" id="studierichting" name="studierichting"
                                           class="form-control @error('studierichting') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jaar"
                                       class="col-md-4 col-form-label text-md-right">Jaar: </label>
                                <div class="col-md-6">
                                    <input type="text" id="jaar" name="jaar"
                                           class="form-control @error('jaar') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tekst"
                                       class="col-md-4 col-form-label text-md-right">Tekst: </label>
                                <div class="col-md-6">
                                    <textarea type="text" id="tekst" name="tekst"
                                              class="form-control @error('tekst') is-invalid @enderror"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="file"
                                       class="col-md-4 col-form-label text-md-right">Foto: </label>
                                <div class="col-md-6">
                                    <input type="file" id="file" name="file">
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