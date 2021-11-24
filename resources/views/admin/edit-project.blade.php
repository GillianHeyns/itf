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

                        <form action="submit" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="titel" class="col-md-4 col-form-label text-md-right">Titel: </label>
                                <div class="col-md-6">
                                    <input type="text" id="titel" name="titel"
                                           class="form-control @error('titel') is-invalid @enderror">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="beschrijving"
                                       class="col-md-4 col-form-label text-md-right">Beschrijving: </label>
                                <div class="col-md-6">
                                    <textarea type="text" id="beschrijving" name="beschrijving"
                                              class="form-control @error('beschrijving') is-invalid @enderror"></textarea>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-4 offset-md-6">
                                    <button type="submit" class="col-md-12 btn btn-primary">
                                        {{ __('Save') }}
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