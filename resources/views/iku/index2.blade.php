@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <h1 class="mt-4"> INDIKATOR KINERJA UTAMA </h1>
    <hr>
    <a href="/iku/createv2" class="btn mb-3">Add New</a>
    
    <table class="table text-center">
        <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2"><em>Key Performance Index</em></th>
                <th rowspan="2">Bobot</th>
                <th rowspan="2">Target</em></th>
                <th rowspan="2">Satuan</th>
                <th colspan="12">Bulan</th>
                <th rowspan="2">Kumulatif</th>
                <th rowspan="2">Score</th>
            </tr>
            <tr>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>                
            </tr>
        </thead>
        
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($iku1 as $ik1) : ?>
            <tr>
                <th scope = "row"><?= $i++; ?>
                <td>{{ $ik1['kpi'] }}</td>
                <td>{{ $ik1['bobot'] }}</td>
                <td>{{ $ik1['target'] }}</td>
                <td>{{ $ik1['satuan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                {{-- <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td> --}}
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>

@endsection
