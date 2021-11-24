@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Nieuwe tag')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    <div class="card-header">Nieuwe tag</div>
                    <div class="card-body">
                        <form action="cms-tags" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="naam" class="col-md-4 col-form-label text-md-right">Tag: </label>
                                <div class="col-md-6">
                                    <input type="text" id="naam" name="naam"
                                           class="form-control @error('naam') is-invalid @enderror">
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

@section('navigation-fixed', 'fixed-bottom')
