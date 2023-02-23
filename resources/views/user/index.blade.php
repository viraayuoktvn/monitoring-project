@extends('layouts.main')

@section('content')

<div class="col-md-12">
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 class="mt-4"> USER PROFILE </h1>
    <hr>

    <form class="py-3">
        @csrf
        
        <div class="edit-profile d-flex justify-between gap-3">
            <div class="avatar-profile">
                <img src="{{ asset('storage/images/'.$user->photo) }}" alt="{{ $user->name }}" height="200" width="200">
            </div>

            <div class="mt-5">
                <div class="mb-3">
                    <h4 class="h4-profile">Name : {{ $user->name }}</h4>
                </div>
        
                <div class="mb-3">
                    <h4 class="h4-profile">E-mail Address : {{ $user->email }}</h4>
                </div>
            </div>
        </div>


        <div class="mb-3 mt-5">
            <a href="/user/{id}" class="btn mb-3">Edit Profile</a>
        </div>
    </form>
</div>

@endsection
