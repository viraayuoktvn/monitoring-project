@extends('layouts.main')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="col-md-12">
    <h1 class="mt-4"> PERSPEKTIF </h1>
    <hr>

    <form class="py-3" method="post" action="/perspektif/store">
        @csrf
        
        <div class="mb-3">
            <label class="label">Badan Pembuat</label>
            <input type="text" name="name_perspektif" id="name_perspektif" class="form-control"></input>                         
        </div>

        <div class="mb-3">
            <label class="label">Deskripsi</label>
            <input type="text" name="desc_perspektif" id="desc_perspektif" class="form-control"></input>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn">Add New</button>
        </div>
    </form>
</div>
@endsection