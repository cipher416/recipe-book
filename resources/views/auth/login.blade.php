@extends('layout')

@section('link-css')
    <link rel="stylesheet" href="/css/pagecss/auth.css">
@endsection


@section('content')
<div class="container py-5 h-100">
        @if (session()->has('errorlogin'))
            <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                {{ session('errorlogin') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

    <div class="card mx-auto" >
      <div class="row">
        <div class="col-md-6 col-lg-5 d-flex align-items-center">
          <img src="{{ asset('storage/bg/bg_login.png') }}"
            class="img-fluid" />
        </div>



        <div class="col-md-6 col-lg-7 d-flex align-items-center">
          <div class="card-body p-4  text-black">

            <form action = "/login" method = "post">
                @csrf
              <div class="mb-3">
                <h1 class="fw-bold text-center">LOGIN</h1>
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="email">Email</label>
                <input type="email" id="email" class="form-control form-control-lg" name="email" />
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="password">Password</label>
                <input type="password" id="password" class="form-control form-control-lg" name="password"/>
              </div>

              <div class="mb-3">
                <p class="text-center text-muted mt-5 mb-0">Don't Have An Account
                    <a href="/register"
                    class="fw-bold text-body"><u>Register here</u></a>
                </p>
              </div>


              <div class="regist pt-1 mb-4 d-flex justify-content-center">
                <button class="btn" type="submit">Login</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
</div>
@endsection


