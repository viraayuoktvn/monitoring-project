@extends('layouts.main')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<div class="mt-0">
    <h1> KONTRAK MANAJEMEN </h1>
    <hr>
    <div class="row justify-between">
        <div class="col">
            <select name="tahun" id="tahun" placeholder="Tahun" class="dropdown-tahun">
                <option value="2019">2019</option>
                <option value="2020">2020</option>
            </select>
        </div>
        <div class="col">
            <a href="/kontrak_manajemen/createv2" class="btn mb-3">Add New</a>
        </div>
    </div>
    
    <table class="table text-center">
        <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2"><em>Key Performance Index</em></th>
                <th rowspan="2">Bobot</th>
                <th rowspan="2">Target</th>
                <th rowspan="2">Satuan</th>
                <th colspan="3">Akumulasi per Tahun</th>
                <th rowspan="2">Score (%)</th>
            </tr>
            <tr>
                <th>Target</th>
                <th>Real</th>
                <th>Capaian</th>
            </tr>
        </thead>
        
        <tbody>
            <?php $i = 1; ?>
            @foreach($kontrak1 as $k1)
                <?php $capaian = round((($k1["real"]/$k1["target"])*100),2) ?>
                <?php $score = round((($capaian*$k1["bobot"])/100),2) ?>
                <tr>
                    <th scope = "row"><?= $i++; ?>
                    <td>{{ $k1["kpi"] }}</td>
                    <td>{{ $k1["bobot"] }}</td>
                    <td>{{ $k1["target"] }}</td>
                    <td>{{ $k1["satuan"] }}</td>
                    <td>{{ $k1["target"] }}</td>
                    <td>{{ $k1["real"] }}</td>
                    <td>{{ $capaian }}</td>
                    <td>{{ $score }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
