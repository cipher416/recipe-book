@extends('layout')

@section('link-css')
    <link rel="stylesheet" href="/css/pagecss/auth.css">
@endsection

@section('content')
  <div class="container py-5 h-100">
        <div class="card mx-auto" >
          <div class="row">
            <div class="col-md-6 col-lg-5 d-flex align-items-center">
              <img src="{{ asset('storage/bg/bg_regis.png') }}"
                class="img-fluid" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4  text-black">

                <form action = "/register" method = "post">
                    @csrf
                  <div class="mb-3">
                    <h1 class="fw-bold text-center">REGISTER</h1>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" name="email" />
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="name">Name</label>
                    <input type="text" id="name" class="form-control form-control-lg" name="name"/>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="address">Address</label>
                    <input type="text" id="address" class="form-control form-control-lg" name="address"/>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="phoneNumber">Phone Number</label>
                    <input type="text" id="phoneNumber" class="form-control form-control-lg" name="phoneNumber"/>
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control form-control-lg" name="password"/>
                  </div>

                  <div class="form-outline mb-3">
                    <label class="form-label" for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" class="form-control form-control-lg" name="confirmPassword"/>
                  </div>

                  <div class="mb-3">
                    <p class="text-center text-muted mt-5 mb-0">Already have an account?
                        <a href="/login"
                        class="fw-bold text-body"><u>Log In here</u></a>
                    </p>
                  </div>


                  <div class="regist pt-1 mb-4 d-flex justify-content-center">
                    <button class="btn" type="submit">Register</button>
                  </div>
                </form>

              </div>
            </div>
          </div>
        </div>
  </div>

@endsection
