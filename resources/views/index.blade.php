@extends('layout')

@section('link-css')
    <link rel="stylesheet" href="/css/pagecss/home.css">
@endsection

@section('content')
    <div class="container mt-3">

        @if (session()->has('successCart'))
            <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                {{ session('successCart') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('successDeleteCart'))
            <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                {{ session('successDeleteCart') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @cannot('is-admin')
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://source.unsplash.com/936x300?food" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://source.unsplash.com/937x300?food') }}" class="d-block w-100">
                    </div>
                    <div class="carousel-item">
                        <img src="https://source.unsplash.com/938x300?food') }}" class="d-block w-100">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="judul text-center fw-bolder mt-5">
                <h2 class="text-decoration-underline">OUR RECIPE</h2>
            </div>

            <div class="row">
                @foreach ($recipes as $recipe )
                <div class="col-md-4 py-5">
                    <div class="card shadow mx-auto">
                        <div class="image px-3 py-4">
                            <img src="{{ asset('storage/'. $recipe->image) }}" class="card-img-top rounded mx-auto d-block" alt="..."/>
                        </div>
                        <div class="card-body px-5">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <h5 class="card-title text-center fw-bolder text-decoration-underline">
                                    {{ $recipe->title }}
                                </h5>
                            </div>
                            <p class="card-text">
                                Rp{{ number_format($recipe->price) }}
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

        @endcannot

        @can('is-admin')
            <div class="judul text-center fw-bolder mt-5">
                <h2>Welcome Admin!</h2>
            </div>

            <div class="my-3 d-flex justify-content-end">
                <a style="background-color: #F9DB6D; color: black;" href="{{url('/addRecipe')}}" class="btn ">Add Recipe Book</a>
            </div>

            @foreach ($recipes as $recipe)
                <div class="body d-flex flex-row align-items-center border border-dark shadow p-3 mb-5 bg-body rounded mx-auto">
                    <div class="img px-3 py-3">
                        <img src="{{ asset('storage/recipe/'. $recipe->image) }}" alt="" width="300px" height="300px">
                    </div>

                    <div class="isi d-flex flex-column">
                        <div class="">
                            <h3>{{$recipe->title}}</h3>
                        </div>
                        <div class="d-flex justify-content-between">
                            <span>By {{$recipe->author}}</span>
                        </div>

                        <hr class="hr hr-blurry" />

                        <div class="d-flex flex-col ">
                            <a href="{{url('updateRecipe/'.$recipe->id)}}" style="background-color: #F9DB6D; color: black;" class="btn">
                                Edit Recipe
                            </a>
                            <form action="{{url('deleteRecipe/'.$recipe->id)}}" method="POST">
                                @csrf
                                <a class="ms-3">
                                    <button class="btn" type="submit" style="background-color: #F9DB6D; color: black;">
                                        Delete Recipe
                                    </button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endcan

    </div>
@endsection
