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
    <h1 class="mt-4"> EVALUASI KONTRAK MANAJEMEN </h1>
    <hr>

    <form class="py-3" method="post" action="/kontrak_manajemen/eval_store">
    @csrf
    
        <div class="mb-3">
            <label class="label">Tahun</label>
            <input type="text" name="tahun" id="tahun" class="form-control"></input>                         
        </div>

        <div class="mb-3">
            <label class="label"><em>Key Performance Index</em></label>
            <div class="mb-3">
                <select name="kontrakmanajemen_id" id="kontrakmanajemen_id">
                    @foreach($kontrak as $k)
                    <option value="{{ $k->id }}">{{ $k['kpi'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="label">Realisasi</label>
            <input type="text" name="real" id="real" class="form-control"></input>                         
        </div>

        <div class="mb-3 py-4">
            <button type="submit" class="btn">Add New</button>
        </div>
    </form>
</div>
@endsection