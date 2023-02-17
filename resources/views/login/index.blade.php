@extends('layouts.login')

@section('content')

{{-- @if($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif --}}

<div class="row justify-content-center">
  <div class="col-lg-4">

    @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    <main class="form-signin">
      <h1 class="h3 mb-3 fw-bold text-center">Log In</h1>
      <h6 class="mb-3 text-center">Belum punya akun? <a href="/register">Register Now</a></h6>

        <form class="mt-5" method="POST">
          @csrf
          <div class="form">
            <h6>Email</h6>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required>
            
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form mt-2">
            <h6>Password</h6>
            <input type="password" name="password" class="form-control" id="password" placeholder="password" required>
          </div>
      
          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Log In</button>
        </form>
    </main>
  </div>
</div>


@endsection