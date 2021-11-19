@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | Home')

@section('main')
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    <div class="card-header">Nieuwe getuigenis toevoegen</div>
                    <form action="submit1" method="post">
                        @csrf
                        <br>
                        <p>
                            <label for="naam">Voornaam + naam: </label>
                            <input type="text" id="naam" name="naam">
                        </p>
                        <p>
                            <label for="studierichting">Studierichting: </label>
                            <input type="text" id="studierichting" name="studierichting">
                        </p>
                        <p>
                            <label for="jaar">Jaar: </label>
                            <input type="text" id="jaar" name="jaar">
                        </p>
                        <p>
                            <label for="tekst">Tekst: </label>
                            <textarea id="tekst" name="tekst">
                            </textarea>
                        </p>
                        <p>
                            <button type="submit">Voeg getuigenis toe</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
