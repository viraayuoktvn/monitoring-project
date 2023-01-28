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
    <h1 class="mt-4"> KONTRAK MANAJEMEN </h1>
    <hr>

    <form class="py-3" method="post" action="/kontrak_manajemen/storev2">
    @csrf
    
        <div class="row">
            <div class="col">
                <label class="label">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun">
            </div>
    
            <div class="col">
                <label class="label">Target</label>
                <input type="text" name="target" id="target" class="form-control"></input>
            </div>
        </div>

        <div class="row py-3">
            <div class="col">
                <label class="label"><em>Key Performance Indicator</em></label>
                <input type="text" name="kpi" id="kpi" class="form-control"></input>
            </div>
    
            <div class="col">
                <label class="label">Satuan</label>
                <input type="int" name="satuan" id="satuan" class="form-control"></input>
            </div>
        </div>

        <div class="row py-3">
            <div class="col">
                <label class="label">Bobot</label>
                <input type="text" name="bobot" id="bobot" class="form-control"></input>
            </div>
    
            <div class="col">
                <label class="label">Akumulasi</label>
                <div class="row">
                    <div class="col">
                        <label class="label1">Target</label>
                        <input type="text" name="target" id="target" class="form-control"></input>
                    </div>
                    <div class="col">
                        <label class="label1">Real</label>
                        <input type="text" name="real" id="real" class="form-control"></input>
                    </div>
            </div>
        </div>

        <div class="mb-3 py-4">
            <button type="submit" class="btn">Add New</button>
        </div>
    </form>
</div>
@endsection