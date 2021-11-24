@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Edit project')

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
                            <div class="form-group d-flex justify-content-end">
                                <div class="col-md-4">
                                    <a role="button" href="/admin/cms" class="col-md-12 btn btn-danger">
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
