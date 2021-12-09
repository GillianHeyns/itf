@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Edit project')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    @foreach($project as $project)
                        <div
                            class="card-header">{{ __('Edit project') }} {{ $project->id }}{{ __(':') }} {{ $project->titel}}</div>
                        <div class="card-body">
                            <form action="{{ $project->id }}/confirm" method="post">
                                @csrf
                                <div class="form-group row">
                                    <label for="titel" class="col-md-4 col-form-label text-md-right">Titel: </label>
                                    <div class="col-md-6">
                                        <input disabled value="{{ $project->titel}}" type="text" id="titel" name="titel"
                                               class="form-control @error('titel') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="beschrijving"
                                           class="col-md-4 col-form-label text-md-right">Beschrijving: </label>
                                    <div class="col-md-6">
                                    <textarea type="text" id="beschrijving" name="beschrijving" style="height: 250px;"
                                              class="form-control @error('beschrijving') is-invalid @enderror">{{ $project->beschrijving}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hyperlink"
                                           class="col-md-4 col-form-label text-md-right">Hyperlink: </label>
                                    <div class="col-md-6">
                                        <input value="{{ $project->hyperlink}}" type="text" id="hyperlink"
                                               name="hyperlink"
                                               class="form-control @error('hyperlink') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="hyperlink_naam" class="col-md-4 col-form-label text-md-right">Hyperlink
                                        naam: </label>
                                    <div class="col-md-6">
                                        <input value="{{ $project->hyperlink_naam}}" type="text" id="hyperlink_naam"
                                               name="hyperlink_naam"
                                               class="form-control @error('hyperlink_naam') is-invalid @enderror">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tag"
                                           class="col-md-4 col-form-label text-md-right">Tags: </label>
                                    <div class="col-md-6">
                                        <div style="padding-left: 10px; padding-right: 10px;"
                                             class="row justify-content-start">
                                            @foreach($project->project_tags as $tag)
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
                                           class="col-md-4 col-form-label text-md-right">Foto's: </label>
                                    <div class="col-md-6">
                                        <figure>
                                            <img
                                                onerror="this.onerror=null; this.src='/uploads/projects/unknownproject.jpg'"
                                                style="border: 2px solid #eee;width: 400px;border-radius: 0.25rem;"
                                                src="/@foreach($project->photos as $photo){{substr(explode(',',$photo->foto_link)[0],2,-1)}}@endforeach"
                                                alt="Foto 1 van {{ $project->titel}}">
                                            <figcaption>Foto 1 van project "{{$project->titel}}"</figcaption>
                                        </figure>
                                        <figure>
                                            <img
                                                onerror="this.onerror=null; this.src='/uploads/projects/unknownproject.jpg'"
                                                style="border: 2px solid #eee;width: 400px;border-radius: 0.25rem;"
                                                src="/@foreach($project->photos as $photo){{substr(explode(',',$photo->foto_link)[1],1,-1)}}@endforeach"
                                                alt="Foto 2 van {{ $project->titel}}">
                                            <figcaption>Foto 2 van project "{{$project->titel}}"</figcaption>
                                        </figure>
                                        <figure>
                                            <img
                                                onerror="this.onerror=null; this.src='/uploads/projects/unknownproject.jpg'"
                                                style="border: 2px solid #eee;width: 400px;border-radius: 0.25rem;"
                                                src="/@foreach($project->photos as $photo){{substr(explode(',',$photo->foto_link)[2],1,-1)}}@endforeach"
                                                alt="Foto 3 van {{ $project->titel}}">
                                            <figcaption>Foto 3 van project "{{$project->titel}}"</figcaption>
                                        </figure>
                                        <figure>
                                            <img
                                                onerror="this.onerror=null; this.src='/uploads/projects/unknownproject.jpg'"
                                                style="border: 2px solid #eee;width: 400px;border-radius: 0.25rem;"
                                                src="/@foreach($project->photos as $photo){{substr(explode(',',$photo->foto_link)[3],1,-1)}}@endforeach"
                                                alt="Foto 4 van {{ $project->titel}}">
                                            <figcaption>Foto 4 van project "{{$project->titel}}"</figcaption>
                                        </figure>
                                        <figure>
                                            <img
                                                onerror="this.onerror=null; this.src='/uploads/projects/unknownproject.jpg'"
                                                style="border: 2px solid #eee;width: 400px;border-radius: 0.25rem;"
                                                src="/@foreach($project->photos as $photo){{substr(explode(',',$photo->foto_link)[4],1,-1)}}@endforeach"
                                                alt="Foto 5 van {{ $project->titel}}">
                                            <figcaption>Foto 5 van project "{{$project->titel}}"</figcaption>
                                        </figure>
                                        <input multiple="multiple" type="file" id="file" name="file[]">
{{--                                        <input value="" multiple="multiple" type="file" id="file" name="file[]">--}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto_beschrijving"
                                           class="col-md-4 col-form-label text-md-right">Foto beschrijving: </label>
                                    <div class="col-md-6">
                                    <textarea type="text" id="foto_beschrijving" name="foto_beschrijving"
                                              class="form-control @error('foto_beschrijving') is-invalid @enderror">@foreach($project->photos as $photo){{ $photo -> foto_beschrijving }}@endforeach</textarea>
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
