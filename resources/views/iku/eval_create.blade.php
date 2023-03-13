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
                <select name="bulan_id" id="bulan_id">
                    @foreach($bulan as $b)
                    <option value="{{ $b->id }}">{{ $b['bulan'] }}</option>
                    @endforeach
                </select>                        
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