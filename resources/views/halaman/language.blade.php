@extends('layout')

@section('link-css')
    <link rel="stylesheet" href="/css/pagecss/language.css">
@endsection

@section('content')

    <div class="container mt-5">
        <div class="title">
            <h1 class="fw-bolder text-uppercase text-center">{{ $language->language_name }} Recipe</h1>
        </div>

        <div class="row">
            @foreach ($language->recipes as $recipe )
            <div class="col-md-4 py-5">
                <div class="card shadow mx-auto">
                    <div class="image px-3 py-4">
                        <img src="{{ asset('storage/recipe/'. $recipe->image) }}" class="card-img-top rounded mx-auto d-block" alt="..."/>
                    </div>
                    <div class="card-body px-5">
                        <div class="d-flex flex-row justify-content-between align-items-center">
                            <h5 class="card-title text-center fw-bolder text-decoration-underline">
                                {{ $recipe->title }}
                            </h5>
                        </div>
                        <p class="card-text">
                            Rp{{ $recipe->price }}
                        </p>

                        <div class="detail ml-3">
                            <a href="/recipeDetail/{{ $recipe->id }}" class="btn">
                                View recipe
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>

@endsection
