@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <h1 class="mt-4"> EDIT PROFILE </h1>
    <hr>

    <form class="py-3" method="post" action="/user/update">
        @csrf
        
        <div class="mb-3">
            <label class="label">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
        </div>

        <div class="mb-3">
            <label class="label">E-mail Address</label>
            <input type="email" name="email" class="form-control" value="{{ $user->email }}">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn">Update Profile</button>
        </div>
    </form>
</div>

@endsection
