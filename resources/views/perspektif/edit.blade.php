@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <h1 class="mt-4"> PERSPEKTIF </h1>
    <hr>

    <form class="py-3" method="post" action="{{ route('perspektif.update', $perspektif->id)}}" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label class="label">Badan Pembuat</label>
            <input type="text" name="name_perspektif" id="name_perspektif" class="form-control" value="{{ $perspektif->name_perspektif }}"></input>                         
        </div>

        <div class="mb-3">
            <label class="label">Deskripsi</label>
            <input type="text" name="desc_perspektif" id="desc_perspektif" class="form-control" value="{{ $perspektif->desc_perspektif }}"></input>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn">Update</button>
        </div>
    </form>
</div>
@endsection