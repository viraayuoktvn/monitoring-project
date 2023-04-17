@extends('layouts.main')

<script>
    // Get the input element
    var inputElement = document.getElementById("file-input");

    // Get the file name element
    var fileNameElement = document.getElementById("file-name");

    // Add event listener to the input element
    inputElement.addEventListener("change", function() {
        // If a file is selected
        if (inputElement.files.length > 0) {
            // Set the file name
            fileNameElement.innerText = inputElement.files[0].name;
        }
    });
</script>

@section('content')

<div class="col-md-12">
    <h1 class="mt-4"> EDIT PROFILE </h1>
    <hr>

    {{-- <form class="py-3" method="post" action="/user/update"> --}}
    <form class="py-3" method="post" action="{{ route('user.update', $user->id)}}" enctype="multipart/form-data">
        @csrf
        
        <div class="edit-profile d-inline justify-between gap-3">
            <div>
                <input type="hidden" name="old_file_name" value="{{ $user->profile_photo_path }}">
                <div class="avatar-profile">
                    <img src="{{ asset('storage/images/'.$user->photo) }}" alt="{{ $user->name }}" height="200" width="200">
                </div>
                <input type="file" name="photo" id="file-input" class="form-control-photo mt-4">
                <span id="file-name">{{ $user->photo }}</span>
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
