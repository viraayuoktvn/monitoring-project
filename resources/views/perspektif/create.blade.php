@extends('layouts.main')

@section('content')

<div class="col-8">
    <h2 class="my-3"> PERSPEKTIF </h2>
</div>

<hr>

<form class="form-add" method="post" action="/perspektif/save">
    
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

@endsection