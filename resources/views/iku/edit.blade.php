@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <h1 class="mt-4"> EDIT INDIKATOR KINERJA UTAMA </h1>
    <hr>

    <form class="py-3" method="post" action="{{ route('iku.update', $iku->id)}}" enctype="multipart/form-data"">
        @csrf
        
        <div class="row py-3">
            <div class="col">
                <label class="label">Tahun</label>
                <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $iku->tahun }}"></input>  
            </div>
            
            <div class="col">
                <label class="label">Satuan</label>
                <input type="text" name="satuan" id="satuan" class="form-control" value="{{ $iku->satuan }}"></input>
            </div>
        </div>
        
        <div class="row py-3">
            <div class="col">
                <label class="label">Perspektif</label>
                <select name="perspektif_id" id="perspektif_id">
                    @foreach($perspektif as $p)
                    <option value="{{ $p->id }}" @if($p->id==$iku->perspektif_id) selected @endif>{{ $p['desc_perspektif'] }}</option>
                    @endforeach
                </select>    
            </div>
            
            <div class="col">
                <label class="label">Polaritas</label>                            
                <div class="mb-3">
                    <select name="polaritas" id="polaritas">
                        <option value="Maximize" @if($iku->polaritas=='Maximize') selected @endif>Maximize</option>
                        <option value="Minimize" @if($iku->polaritas=='Minimize') selected @endif>Minimize</option>
                    </select>
                </div>
            </div>
        </div>
        
        <div class="row py-3">
            <div class="col">
                <label class="label"><em>Key Address</em></label>
                    <div class="mb-3">
                        <label class="label1">IKU Atasan</label>
                        <input type="text" name="ikuatasan" id="ikuatasan" class="form-control" value="{{ $iku->ikuatasan }}"></input>
                    </div>
                    <div>
                        <label class="label1">Target</label>
                        <input type="text" name="target_ka" id="target_ka" class="form-control" value="{{ $iku->target_ka }}"></input>
                    </div> 
            </div>
            
            <div class="col py-3">
                <label class="label">Bobot</label>
                <input type="text" name="bobot" id="bobot" class="form-control" value="{{ $iku->bobot }}"></input>

                <label class="label py-3">Program Kerja</label>
                <input type="text" name="programkerja" id="programkerja" class="form-control" value="{{ $iku->programkerja }}"></input>
            </div>
        </div>
        
        <div class="row py-2">
            <div class="col">
                <label class="label">Indikator Kinerja Utama</label>
                <input type="text" name="iku" id="iku" class="form-control" value="{{ $iku->iku }}"></input>     
            </div>
            
            <div class="col">
                <label class="label">Penanggung Jawab</label>
                <input type="text" name="pj" id="pj" class="form-control" value="{{ $iku->pj }}"></input>
            </div>
        </div>

        <div class="row py-4">
            <div class="col">
                <label class="label">Target</label>
                <input type="text" name="target_iku" id="target_iku" class="form-control width-1/2" value="{{ $iku->target_iku }}"></input>    
            </div>

            <div class="col">
                <label class="label">Unit Kerja</label>
                <select name="unitkerja_id" id="unitkerja_id">
                    @foreach($unitkerja as $uk)
                    <option value="{{ $uk->id }}" @if($uk->id==$iku->unitkerja_id) selected @endif>{{ $uk['name_dept'] }}</option>
                    @endforeach
                </select>   
            </div>
        </div>

        <div class="py-4">
            <button type="submit" class="btn">Update</button>
        </div>
    </form>
</div>
@endsection