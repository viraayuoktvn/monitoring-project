@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <h1 class="mt-4"> EDIT PROFILE </h1>
    <hr>

    {{-- <form class="py-3" method="post" action="/user/update"> --}}
    <form class="py-3" method="post" action="{{ route('user.update', $user->id)}}" enctype="multipart/form-data">
        @csrf
        
        <div class="edit-profile d-inline justify-between gap-3">
            <div>
                <div class="avatar-profile">
                    <img src="{{ asset('storage/images/'.$user->photo) }}" alt="{{ $user->name }}" height="200" width="200">
                </div>
                <input type="file" name="photo" id="photo" class="form-control-photo mt-4"> 
            </div>

            <div class="test-index">
                <div class="mb-3">
                    <label class="label">Name</label>
                    <input type="text" name="name" class="form-control mt-2" value="{{ $user->name }}">
                </div>
        
                <div class="mb-3">
                    <label class="label">E-mail Address</label>
                    <input type="email" name="email" class="form-control mt-2" value="{{ $user->email }}">
                </div>
            </div>
        </div>


        <div class="mb-3 mt-5">
            <button type="submit" class="btn">Update Profile</button>
        </div>
    </form>
</div>

@endsection
