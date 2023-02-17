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
                @foreach($kontrak as $k)
                <option value="{{ $k['tahun'] }}">{{ $k['tahun'] }}</option>
                @endforeach
            </select>
        </div>
        <div class="col">
            <a href="/kontrak_manajemen/create" class="btn mb-3">Add New</a>
        </div>
    </div>
    
    <table class="table text-center" id="myTable">
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
            <?php $j = 1; ?>
            @php
            $groupedData = $kontrak->groupBy('perspektif.desc_perspektif');
          @endphp
            @foreach ($groupedData as $groupedValue => $dataArray)
              @php
                $rowspan = $dataArray->count();
              @endphp
              <tr>
                {{-- <th scope = "row"><?= $j; ?> --}}
                <td rowspan="{{ $rowspan }}">{{ $j++ }}</td>
                <td rowspan="{{ $rowspan }}">{{ $groupedValue }}</td>
                <td>{{ $dataArray[0]->kpi }}</td>
                <td>{{ $dataArray[0]->target }}</td>
                <td>{{ $dataArray[0]->satuan }}</td>
                <td>{{ $dataArray[0]->polaritas }}</td>
                <td>{{ $dataArray[0]->bobot }}</td>
                <td>{{ $dataArray[0]->pd }}</td>
                <td>{{ $dataArray[0]->hcfd }}</td>
              </tr>
              @for ($i = 1; $i < $rowspan; $i++)
                <tr>
                    {{-- <th scope = "row"><?= $j; ?> --}}
                    <td>{{ $dataArray[$i]->kpi }}</td>
                    <td>{{ $dataArray[$i]->target }}</td>
                    <td>{{ $dataArray[$i]->satuan }}</td>
                    <td>{{ $dataArray[$i]->polaritas }}</td>
                    <td>{{ $dataArray[$i]->bobot }}</td>
                    <td>{{ $dataArray[$i]->pd }}</td>
                    <td>{{ $dataArray[$i]->hcfd }}</td>
                </tr>
              @endfor
            @endforeach
          </tbody>
    </table>
</div>

@endsection
