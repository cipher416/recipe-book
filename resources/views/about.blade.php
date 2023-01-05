@extends('layout')

@section('link-css')
    <link rel="stylesheet" href="/css/pagecss/about.css">
@endsection

@section('content')
    <div class="container">
        <div class="header">
            <h1 class="text-center fw-bolder text-uppercase">
                About Us
            </h1>
        </div>

        <div class="about d-flex flex-row justify-content-between align-items-center shadow p-3 mb-5 mx-auto">
            <div class="img">
                <img src="{{ asset('storage/bg/logo.png') }}" alt="" width="400px" height="400px">
            </div>
            <div class="isi">
                <p>
                    Recipe Book is a website that sells recipe from many famous recipe book. In this website you can buy a recipe that you want from a book without buying the whole book and the recipe will be yours via pdf. You can also choose to buy english or indonesia version.
                </p>
            </div>
        </div>

        <div class="header">
            <h1 class="text-center fw-bolder text-uppercase">
                Meet Our Team
            </h1>
        </div>

        <div class="mx-auto d-flex flex-row justify-content-around mb-5">
            <div class="team">
                <div class="foto">
                    <img src="{{ asset('storage/fototeam/cris.png') }}" alt="">
                </div>
                <div class="nama text-center ">
                    <h6 class="fw-bold">CRISTOPER ANDERSON</h6>
                </div>
                <div class="nim text-center ">
                    <h6 class="fw-bold">2440039133</h6>
                </div>
            </div>
            <div class="team">
                <div class="foto">
                    <img src="{{ asset('storage/fototeam/jojo.png') }}" alt="">
                </div>
                <div class="nama text-center ">
                    <h6 class="fw-bold">JONATHAN WIJAYA</h6>
                </div>
                <div class="nim text-center ">
                    <h6 class="fw-bold">2440040066</h6>
                </div>
            </div>
            <div class="team">
                <div class="foto">
                    <img src="{{ asset('storage/fototeam/roger.png') }}" alt="">
                </div>
                <div class="nama text-center ">
                    <h6 class="fw-bold">ROGER LEONARDO</h6>
                </div>
                <div class="nim text-center ">
                    <h6 class="fw-bold">2440030071</h6>
                </div>
            </div>
        </div>

        <div class="mx-auto d-flex flex-row justify-content-around">
            <div class="team">
                <div class="foto">
                    <img src="{{ asset('storage/fototeam/rani.png') }}" alt="">
                </div>
                <div class="nama text-center ">
                    <h6 class="fw-bold">RANIAH ZAHRAH HIBATULLAH</h6>
                </div>
                <div class="nim text-center ">
                    <h6 class="fw-bold">2440056625</h6>
                </div>
            </div>
            <div class="team">
                <div class="foto">
                    <img src="{{ asset('storage/fototeam/karin.png') }}" alt="">
                </div>
                <div class="nama text-center ">
                    <h6 class="fw-bold">KARIN NORTHUS</h6>
                </div>
                <div class="nim text-center ">
                    <h6 class="fw-bold">2440062086</h6>
                </div>
            </div>
        </div>

    </div>
@endsection
