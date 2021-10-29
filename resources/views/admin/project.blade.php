@extends('layouts.app')

@section('content')
    <div class="container" id="new-project">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-0">
                    <div class="card-header">{{ __('Project') }}</div>

                    <div class="card-body">

                        <form action="">
                            <label for="title">Title:</label><br>
                            <input type="text" id="title" name="title" value="Hackaton patient zero" class="mt-0"><br>
                            <label for="beschrijving">Beschrijving:</label><br>
                            <input type="text" id="beschrijving" name="beschrijving" value="Hackaton, Artificial intelligence" class="mt-0"><br>
                            <!-- geen idee hoe ik foto moet laten uploaden enzo, niks van gevonden op internet -->
                            <label for="text">Text:</label><br>
                            <textarea id="text" name="text" placeholder="Something..." class="mt-0"> </textarea><br>
                            <span>
                                  <input type="checkbox" id="app" name="app" value="APP">
                                  <label for="app" class="mr-4"> APP</label>
                                  <input type="checkbox" id="iot" name="iot" value="IOT">
                                  <label for="iot" class="mr-4"> IOT</label>
                                  <input type="checkbox" id="di" name="di" value="DI">
                                  <label for="di" class="mr-4"> DI</label>
                                  <input type="checkbox" id="ccs" name="ccs" value="CCS">
                                  <label for="ccs" class="mr-4"> CCS</label>
                                  <input type="checkbox" id="ai" name="ai" value="AI">
                                  <label for="ai" class="mr-4"> AI</label>
                                  <input type="checkbox" id="hackaton" name="hackaton" value="HACKATON">
                                  <label for="hackaton" class="mr-4"> HACKATON</label>
                                  <input type="checkbox" id="other" name="other" value="OTHER">
                                  <label for="other" class="mr-4"> OTHER</label>
                            </span>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
