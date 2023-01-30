@extends('layouts.main')

@section('content')

{{-- @if($errors->any)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}

<div class="col-md-12">
    <h1 class="mt-4"> KONTRAK MANAJEMEN </h1>
    <hr>

    <form class="py-3" method="post" action="/kontrak_manajemen/store">
        @csrf

        <div class="mb-3">
            <label class="label">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun">
        </div>

        <div class="mb-3">
            <label class="label">Sasaran Strategis</label>
            <input type="text" name="sasaranstrategis" id="sasaranstrategis" class="form-control">
        </div>

        <div class="mb-3">
            <label class="label"><em>Key Performance Indicator</em></label>
            <input type="text" name="kpi" id="kpi" class="form-control">
        </div>

        <div class="mb-3">
            <label class="label">Target</label>
            <input type="text" name="target" id="target" class="form-control">
        </div>

        <div class="mb-3">
            <label class="label">Satuan</label>
            <input type="text" name="satuan" id="satuan" class="form-control">
        </div>

        <div class="mb-3">
            <label class="label">Polaritas</label>                            
            <div class="mb-3">
                <select name="polaritas" id="polaritas">
                    <option value="Maximize">Maximize</option>
                    <option value="Minimize">Minimize</option>
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="label">Bobot</label>
            <input type="int" name="bobot" id="bobot" class="form-control">
        </div>
        
        <div class="mb-3">
            <label class="label">Matrik Tanggung Jawab</label>
                <div class="mb-3">
                    <label class="label1">PD</label>
                    <div class="mb-3">
                        <select name="pd" id="pd">
                            <option value="O">O</option>
                            <option value="R">R</option>
                            <option value="S">S</option>
                        </select>
                    </div>

                    <label class="label1">HCFD</label>
                        <div class="mb-3">
                            <select name="hcfd" id="hcfd">
                                <option value="O">O</option>
                                <option value="R">R</option>
                                <option value="S">S</option>
                            </select>
                        </div>
                </div>
            
        </div>

        <div class="mb-3">
            <button type="submit" class="btn">Add New</button>
        </div>
    </form>
</div>

@endsection