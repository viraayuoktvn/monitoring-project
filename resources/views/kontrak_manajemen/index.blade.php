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
    <a href="/kontrak_manajemen/create" class="btn mb-3">Add New</a>
    
    <table class="table text-center">
        <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Sasaran Strategis</th>
                <th rowspan="2"><em>Key Performance Index</em></th>
                <th rowspan="2">Target</th>
                <th rowspan="2">Satuan</th>
                <th rowspan="2">Polaritas</th>
                <th rowspan="2">Bobot</th>
                <th colspan="2">Matrik Tanggung Jawab</th>
            </tr>
            <tr>
                <th>PD</th>
                <th>HCFD</th>
            </tr>
        </thead>
        
        <tbody>
            <?php 
                $i = 1;
            ?>
            @foreach($kontrak as $k)
                <tr>
                    <th scope = "row"><?= $i++; ?>
                    <td>{{ $k["sasaranstrategis"] }}</td>
                    <td>{{ $k["kpi"] }}</td>
                    <td>{{ $k["target"] }}</td>
                    <td>{{ $k["satuan"] }}</td>
                    <td>{{ $k["polaritas"] }}</td>
                    <td>{{ $k["bobot"] }}</td>
                    <td>{{ $k["pd"] }}</td>
                    <td>{{ $k["hcfd"] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
