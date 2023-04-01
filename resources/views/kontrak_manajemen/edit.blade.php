@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <h1 class="mt-4"> EDIT KONTRAK MANAJEMEN </h1>
    <hr>

    <form class="py-3" method="post" action="{{ route('kontrak_manajemen.update', $kontrak->id)}}" enctype="multipart/form-data">
    @csrf
    
        <div class="row">
            <div class="col">
                <label class="label">Tahun</label>
                <input type="text" class="form-control" id="tahun" name="tahun" value="{{ $kontrak->tahun }}">
            </div>
    
            <div class="col">
                <label class="label">Satuan</label>
                <input type="text" name="satuan" id="satuan" class="form-control" value="{{ $kontrak->satuan }}"></input>
            </div>
        </div>

        <div class="row py-3">
            <div class="col">
                <label class="label">Sasaran Strategis</label>
                <div class="mb-3">
                    <select name="perspektif_id" id="perspektif_id">
                        @foreach($perspektif as $p)
                        <option value="{{ $p->id }}" @if($p->id==$kontrak->perspektif_id) selected @endif>{{ $p['desc_perspektif'] }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
    
            <div class="col">
                <label class="label">Polaritas</label>                            
                <div class="mb-3">
                    <select name="polaritas" id="polaritas">
                        <option value="Maximize" @if($kontrak->polaritas=='Maximize') selected @endif>Maximize</option>
                        <option value="Minimize" @if($kontrak->polaritas=='Minimize') selected @endif>Minimize</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="row py-3">
            <div class="col">
                <label class="label"><em>Key Performance Indicator</em></label>
                <input type="text" name="kpi" id="kpi" class="form-control" value="{{ $kontrak->kpi }}"></input>
            </div>
    
            <div class="col">
                <label class="label">Bobot</label>
                <input type="int" name="bobot" id="bobot" class="form-control" value="{{ $kontrak->bobot }}"></input>
            </div>
        </div>

        <div class="row py-3">
            <div class="col">
                <label class="label">Target</label>
                <input type="text" name="target" id="target" class="form-control" value="{{ $kontrak->target }}"></input>
            </div>
    
            <div class="col">
                <label class="label">Matrik Tanggung Jawab</label>
                <div class="row">
                    <div class="col">
                        <label class="label1">PD</label>
                        <div class="mb-3">
                            <select name="pd" id="pd">
                                <option value="O" @if($kontrak->pd=='O') selected @endif>O</option>
                                <option value="R" @if($kontrak->pd=='R') selected @endif>R</option>
                                <option value="S" @if($kontrak->pd=='S') selected @endif>S</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <label class="label1">HCFD</label>
                        <div class="mb-3">
                            <select name="hcfd" id="hcfd">
                                <option value="O" @if($kontrak->hcfd=='O') selected @endif>O</option>
                                <option value="R" @if($kontrak->hcfd=='R') selected @endif>R</option>
                                <option value="S" @if($kontrak->hcfd=='S') selected @endif>S</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn">Update</button>
        </div>
    </form>
</div>

@endsection