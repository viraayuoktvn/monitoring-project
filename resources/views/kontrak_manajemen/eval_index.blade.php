@extends('layouts.main')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<div class="mt-0">
    <h1> EVALUASI KONTRAK MANAJEMEN </h1>
    <hr>
    <div class="row justify-between">
        <div class="col">
            <form action="{{ route('kontrak_manajemen.eval_filter') }}" method="POST">
                @csrf
                <div class="form-group d-flex">
                    <select name="tahun" id="tahun" placeholder="Tahun" class="dropdown-tahun">
                        <option value="">Tahun</option>
                        @php $groupedData = $evalkontrak->groupBy('tahun'); @endphp
                        @foreach ($groupedData as $groupedValue => $dataArray)
                            <option value="{{ $groupedValue }}">{{ $groupedValue }}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn mt-1 h-25">Filter</button>
                    <a href="{{ route('kontrak_manajemen.eval_index') }}" class="btn mt-1 h-25 w-50">Reset Filter</a>                </div>
            </form>
        </div>
        <div class="col">
            <a href="/kontrak_manajemen/eval_create" class="btn mb-3">Add New</a>
        </div>
    </div>
    
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2"><em>Key Performance Index</em></th>
                <th rowspan="2">Bobot</th>
                <th rowspan="2">Target</th>
                <th rowspan="2">Satuan</th>
                <th colspan="3">Akumulasi per Tahun</th>
                <th rowspan="2">Score (%)</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th>Target</th>
                <th>Real</th>
                <th>Capaian</th>
            </tr>
        </thead>
        
        <tbody>
            <?php 
                $i = 1;
                $total = 0 ?>
            @foreach($evalkontrak as $ek)
                <?php $capaian = round((($ek["real"]/$ek->kontrakmanajemen["target"])*100),2) ?>
                <?php $score = round((($capaian*$ek->kontrakmanajemen["bobot"])/100),2) ?>
                <tr>
                    <th scope = "row"><?= $i++; ?>
                    <td>{{ $ek->kontrakmanajemen["kpi"] }}</td>
                    <td>{{ $ek->kontrakmanajemen["bobot"] }}</td>
                    <td>{{ $ek->kontrakmanajemen["target"] }}</td>
                    <td>{{ $ek->kontrakmanajemen["satuan"] }}</td>
                    <td>{{ $ek->kontrakmanajemen["target"] }}</td>
                    <td>{{ $ek["real"] }}</td>
                    <td>{{ $capaian }}</td>
                    <td>{{ $score }}</td>

                    <td>
                        <form action="{{ route("kontrak_manajemen.eval_edit", $ek->id) }}" method="get" class="d-inline">
                            @csrf
                            <button class="badge bg-warning" onclick="return confirm('Anda yakin ingin mengubah data?')">Edit</button>
                        </form>
    
                        <form action="{{ route("kontrak_manajemen.eval_destroy", $ek->id) }}" method="post" class="d-inline">
                            @csrf
                            <button class="badge bg-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php $total += $score ?>
            @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="3"><strong>Total Score</strong></td>
                    <td>{{ $total }}</td>
                </tr>

        </tbody>
    </table>
</div>

@endsection
