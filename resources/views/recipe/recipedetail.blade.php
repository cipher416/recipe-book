@extends('layout')

@section('link-css')
    <link rel="stylesheet" href="/css/pagecss/detail.css">
@endsection

@section('content')
    <div class="container mt-5">
        <div class="header mb-5">
            <h1 class="text-center fw-bolder text-uppercase">
                Recipe Detail
            </h1>
        </div>

        <div class="body d-flex flex-row justify-content-around align-items-center shadow p-3 mb-5 mx-auto">
            <div class="img">
                <img src="{{ asset('storage/'. $recipe->image) }}" alt="" width="400px" height="400px">
            </div>
            <div class="divider">

            </div>
            <div class="isi d-flex flex-column">
                <div class="">
                    <h3>{{$recipe->title}}</h3>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>By {{$recipe->author}}</div>
                        <div class="price">Rp{{number_format($recipe->price)}}</div>
                    </div>

                    <hr class="hr hr-blurry" />

                    <div class="">
                    <p>{{$recipe->description}}</p>
                    </div>

                    @auth
                        <form action="/addCart/{{ $recipe->id }}" method="post">
                            @csrf
                            <div class="pt-1 mb-4 add">
                                <button class="btn" type="submit">Add To Cart</button>
                            </div>
                        </form>

                    @endauth

                    @guest
                        <div class="pt-1 mb-4 login">
                            <a class="btn" href="/login" role="button">Login</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
@endsection
