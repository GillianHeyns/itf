@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Home')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    <div class="card-header">Nieuw project toevoegen</div>
                    <form action="submit" method="post">
                        @csrf
                        <br>
                        <p>
                            <label for="titel">Titel: </label>
                            <input type="text" id="titel" name="titel">
                        </p>
                        <p>
                            <label for="beschrijving">Beschrijving: </label>
                            <input type="text" id="beschrijving" name="beschrijving">
                        </p>
                        <p>
                            <button type="submit">Voeg project toe</button>
                        </p>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
