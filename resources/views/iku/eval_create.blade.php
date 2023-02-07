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
        <h1 class="mt-4"> INDIKATOR KINERJA UTAMA </h1>
        <hr>
        
        <form class="py-3" method="post" action="/iku/eval_store">
            @csrf
            
            <div class="mb-3">
                <label class="label">Tahun</label>
                <input type="text" name="tahun" id="tahun" class="form-control"></input>                         
            </div>
    
            <div class="mb-3">
                <label class="label"><em>Key Performance Index</em></label>
                <div class="mb-3">
                    <select name="iku_id" id="kontrakmanajemen_id">
                        @foreach($iku as $ik)
                        <option value="{{ $ik->id }}">{{ $ik['iku'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
    
            <div class="mb-3">
                <label class="label">Bulan</label>
                <div class="mb-3">
                    <select name="bulan" id="bulan">
                        <option value="Januari">Januari</option>
                        <option value="Februari">Februari</option>
                        <option value="Maret">Maret</option>
                        <option value="April">April</option>
                        <option value="Mei">Mei</option>
                        <option value="Juni">Juni</option>
                        <option value="Juli">Juli</option>
                        <option value="Agustus">Agustus</option>
                        <option value="September">September</option>
                        <option value="Oktober">Oktober</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                </div>                         
            </div>

            <div class="mb-3">
                <label class="label">Realisasi</label>
                <input type="text" name="real" id="real" class="form-control"></input>                         
            </div>

            <div class="py-4">
                <button type="submit" class="btn">Add New</button>
            </div>

    </form>
</div>
@endsection