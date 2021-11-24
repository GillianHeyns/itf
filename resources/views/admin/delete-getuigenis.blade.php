@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Delete getuigenis')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    @foreach($testimony as $testimony)
                        <div
                            class="card-header">{{ __('Delete getuigenis') }} {{ $testimony->id }}{{ __(':') }} {{ $testimony->testimony_studentnaam}}</div>
                        <div class="card-body">
                            <div class="d-flex justify-content-center">
                                <p class="row">Weet je zeker dat je de getuigenis van&nbsp;<span class="font-weight-bold">{{ $testimony -> testimony_studentnaam }} - {{ $testimony -> testimony_studierichting }} - {{ $testimony -> testimony_jaar }} </span>
                                    &nbsp;wil verwijderen?</p>
                            </div>

                            <div class="d-flex justify-content-around">
                                <a role="button" href='/admin/cms-testimonies/delete/{{ $testimony->id }}/confirm'
                                   class="col-4 btn btn-danger btn-sm">Delete</a>
                                <a role="button" href="/admin/cms-testimonies"
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
