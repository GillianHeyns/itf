@extends('layouts.template')

@include('shared.icons')

@section('title', 'IT Factory | CMS')

@section('main')
    <div class="text-center">
        <div class="m-5"></div>
        <h1 class="display-4 mt-4 mb-4">Welkom {{ auth()->user()->name }}!</h1>
        <div class="m-5"></div>

        <div class="row justify-content-around">
            <a style="color: black; text-decoration: none;"
               style="color: black; text-decoration: none;" asp-area="" asp-controller="Unit" asp-action="Index">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="~/img/products.jpg" alt="Card image products">
                    <div class="card-body">
                        <h5 class="card-title">Producten</h5>
                        <p class="card-text">Een lijst van alle producten</p>
                    </div>
                </div>
            </a>
            <a style="color: black; text-decoration: none;"
               style="color: black; text-decoration: none;" asp-area="" asp-controller="Supplier" asp-action="Index">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="~/img/suppliers.jpg" alt="Card image suppliers">
                    <div class="card-body">
                        <h5 class="card-title">CMS</h5>
                        <p class="card-text">Beheer van projecten, getuigenissen, tags, etc.</p>

                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
