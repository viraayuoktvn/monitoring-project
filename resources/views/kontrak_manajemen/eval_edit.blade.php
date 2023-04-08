@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <h1 class="mt-4"> EDIT EVALUASI KONTRAK MANAJEMEN </h1>
    <hr>

    <form class="py-3" method="post" action="{{ route('kontrak_manajemen.eval_update', $evalkontrak->id)}}" enctype="multipart/form-data">
    @csrf
    
        <div class="mb-3">
            <label class="label">Tahun</label>
            <input type="text" name="tahun" id="tahun" class="form-control" value="{{ $evalkontrak->tahun }}"></input>                         
        </div>

        <div class="mb-3">
            <label class="label"><em>Key Performance Index</em></label>
            <div class="mb-3">
                <select name="kontrakmanajemen_id" id="kontrakmanajemen_id">
                    @foreach($kontrak as $k)
                    <option value="{{ $k->id }}" @if($k->id==$evalkontrak->kontrakmanajemen_id) selected @endif>{{ $k['kpi'] }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="mb-3">
            <label class="label">Realisasi</label>
            <input type="text" name="real" id="real" class="form-control" value="{{ $evalkontrak->real }}"></input>                         
        </div>

        <div class="mb-3 py-4">
            <button type="submit" class="btn">Update</button>
        </div>
    </form>
</div>
@endsection