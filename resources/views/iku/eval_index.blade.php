@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <h1 class="mt-4"> EVALUASI INDIKATOR KINERJA UTAMA </h1>
    <hr>
    <div class="row justify-between">
        <div class="col">
            <select name="tahun" id="tahun" placeholder="Tahun" class="dropdown-tahun">
                @foreach($evaliku as $ik)
                <option value="{{ $ik['tahun'] }}">{{ $ik['tahun'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <select name="unitkerja" id="unitkerja" placeholder="Unit Kerja" class="dropdown-tahun">
                @foreach($unitkerja as $uk)
                <option value="{{ $uk->id }}">{{ $uk['name_dept'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <a href="/iku/eval_create" class="btn mb-3">Add New</a>
        </div>
    </div>
    
    <table class="table text-center">
        <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2"><em>Key Performance Index</em></th>
                <th rowspan="2">Bobot</th>
                <th rowspan="2">Target</em></th>
                <th rowspan="2">Satuan</th>
                <th rowspan="2"> </th>
                <th colspan="12">Bulan</th>
                <th rowspan="2">Kumulatif</th>
                <th colspan="12">Score</th>
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

            @foreach($evaliku as $ik1)
            <tr>
                <th scope = "row"><?= $i++; ?>
                <td>{{ $ik1->iku['iku'] }}</td>
                <td>{{ $ik1->iku['bobot'] }}</td>
                <td>{{ $ik1->iku['target_iku'] }}</td>
                <td>{{ $ik1->iku['satuan'] }}</td>

                {{-- <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td>
                <td>{{ $ik1['bulan'] }}</td> --}}
                {{-- <td>{{ $kumulatif }}</td>
                <td>{{ $score }}</td> --}}
            </tr>
        @endforeach
            <tr>
                <td colspan="5"><strong>Total Capaian</strong></td>
                {{-- <td colspan="12">{{ $t_capaian }}</td> --}}
            </tr>
            <tr>
                <td colspan="5"><strong>Total Bobot</strong></td>
                {{-- <td colspan="12">{{ $t_capaian }}</td> --}}
            </tr>
            <tr>
                <td colspan="5"><strong>Total Capaian : Total Bobot</strong></td>
                {{-- <td colspan="12">{{ $t_capaian }}</td> --}}
            </tr>
            <tr>
                <td colspan="5"><strong>Potongan Keterlambatan</strong></td>
                {{-- <td colspan="12">{{ $t_capaian }}</td> --}}
            </tr>
            <tr>
                <td colspan="5"><strong>Capaian Akhir</strong></td>
                {{-- <td colspan="12">{{ $t_capaian }}</td> --}}
            </tr>
        </tbody>
    </table>
</div>

@endsection
