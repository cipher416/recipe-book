@extends('layout')

@section('link-css')
    <link rel="stylesheet" href="/css/pagecss/cart.css">
@endsection

@section('content')

    <div class="container">
        <div class="header my-5">
            <h1 class="text-center fw-bolder text-uppercase">
                My Cart
            </h1>
        </div>

        @if ($count == 0)
            <div class="judul text-center fw-bolder mt-5 mb-4">
                <h4 class="">
                    Your Cart Is Empty!
                </h4>
            </div>
        @else

            @foreach ($carts as $cart )


                <div class="body d-flex flex-row shadow p-3 mb-5 mx-auto">
                    <div class="img">
                        <img src="{{ asset('storage/'. $cart->recipe->image) }}" alt="" width="250px" height="250px">
                    </div>

                    <div class="divider">

                    </div>

                    <div class="isi d-flex flex-column justify-content-around">
                        <div class="">
                            <h3>{{$cart->recipe->title}}</h3>
                        </div>
                        <div class="author">
                            <div>By {{$cart->recipe->author}}</div>
                        </div>
                        <div class="price">
                            Rp{{number_format($cart->recipe->price)}}
                        </div>

                        <div class="delete">
                            <form action="/deleteCart/{{ $cart->id }}" method="post">
                                @csrf
                                <button class="btn py-2">
                                    Remove Recipe
                                </button>
                            </form>
                        </div>

                    </div>
                </div>

            @endforeach


            <div class="price">
                <h5 class="fw-semibold">Total Price : Rp {{ number_format($total) }}</h5>
            </div>

            <div class="end d-flex justify-content-center align-items-center mt-2">
                <div class="checkout mx-auto">
                    <form action="/history" method="post">
                        @csrf
                        <button class="check btn py-1">
                            Check Out
                        </button>
                    </form>
                </div>
            </div>

        @endif

    </div>

@endsection
