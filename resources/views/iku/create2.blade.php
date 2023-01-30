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
        
        <form class="py-3" method="post" action="/iku/storev2">
            @csrf
            
            <div class="row py-3">
                <div class="col">
                    <label class="label">Tahun</label>
                    <input type="text" name="tahun" id="tahun" class="form-control"></input>  
                </div>
                
                <div class="col">
                    <label class="label">Bobot</label>
                    <input type="text" name="bobot" id="bobot" class="form-control"></input>
            </div>
        </div>
        
        <div class="row py-3">
            <div class="col">
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
            
            <div class="col">
                <label class="label">Target</label>                            
                <input type="text" name="target" id="target" class="form-control"></input>
            </div> 
        </div>
        
        <div class="row py-2">
            <div class="col">
                <label class="label"><em>Key Performance Index</em></label>
                <input type="text" name="kpi" id="kpi" class="form-control"></input>     
            </div>
            
            <div class="col">
                <label class="label">Satuan</label>
                <input type="text" name="satuan" id="satuan" class="form-control"></input>
            </div>
        </div>

        <div class="py-4">
            <button type="submit" class="btn">Add New</button>
        </div>

    </form>
</div>
@endsection