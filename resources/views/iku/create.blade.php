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

    <form class="py-3" method="post" action="/iku/store">
        @csrf
        
        <div class="row py-3">
            <div class="col">
                <label class="label">Tahun</label>
                <input type="text" name="tahun" id="tahun" class="form-control"></input>  
            </div>
            
            <div class="col">
                <label class="label">Satuan</label>
                <input type="text" name="satuan" id="satuan" class="form-control"></input>
            </div>
        </div>
        
        <div class="row py-3">
            <div class="col">
                <label class="label">Perspektif</label>
                <input type="text" name="perspektif" id="perspektif" class="form-control"></input>      
            </div>
            
            <div class="col">
                <label class="label">Polaritas</label>                            
                <div class="mb-3">
                    <select name="polaritas" id="polaritas">
                        <option value="Maximize">Maximize</option>
                        <option value="Minimize">Minimize</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="row py-3">
            <div class="col">
                <label class="label"><em>Key Address</em></label>
                    <div class="mb-3">
                        <label class="label1">IKU Atasan</label>
                        <input type="text" name="ikuatasan" id="ikuatasan" class="form-control"></input>
                    </div>
                    <div>
                        <label class="label1">Target</label>
                        <input type="text" name="target_ka" id="target_ka" class="form-control"></input>
                    </div> 
            </div>
            
            <div class="col py-3">
                <label class="label">Bobot</label>
                <input type="text" name="bobot" id="bobot" class="form-control"></input>

                <label class="label py-3">Program Kerja</label>
                <input type="text" name="programkerja" id="programkerja" class="form-control"></input>
            </div>
        </div>
        
        <div class="row py-2">
            <div class="col">
                <label class="label">Indikator Kinerja Utama</label>
                <input type="text" name="iku" id="iku" class="form-control"></input>     
            </div>
            
            <div class="col">
                <label class="label">Penanggung Jawab</label>
                <input type="text" name="pj" id="pj" class="form-control"></input>
            </div>
        </div>

        <div class="row py-4">
            <div class="col">
                <label class="label">Target</label>
                <input type="text" name="target_iku" id="target_iku" class="form-control width-1/2"></input>    
            </div>

            <div class="col">
                <div class="py-4">
                    <button type="submit" class="btn">Add New</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection