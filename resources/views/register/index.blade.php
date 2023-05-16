@extends('layouts.login')

@section('content')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-bold text-center">Register</h1>
      <h6 class="mb-3 text-center">Sudah punya akun? <a href="/login">Log In</a></h6>

        <form class="mt-4" action="/register" method="post">
            @csrf

            <div class="form">
                <h6>Name</h6>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="name">

                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <div class="form mt-3">
                <h6>Email</h6>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com">

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form mt-3">
                <h6>Password</h6>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="password">

                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            </div>

            <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
        </form>
    </main>
  </div>
</div>


@endsection