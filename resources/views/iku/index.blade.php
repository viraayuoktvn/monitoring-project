@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <h1 class="mt-4"> INDIKATOR KINERJA UTAMA </h1>
    <hr>
    <div class="row justify-between">
        <div class="col">
            <select name="tahun" id="tahun" placeholder="Tahun" class="dropdown-tahun">
                @php
                    $groupedData = $iku->groupBy('tahun');
                @endphp

                @foreach ($groupedData as $groupedValue => $dataArray)
                    <option value="{{ $groupedValue }}">{{ $groupedValue }}</option>
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
            <a href="/iku/create" class="btn mb-3">Add New</a>
        </div>
    </div>
    
    <table class="table text-center" id="myTable">
        <thead>
            <tr>
                <th rowspan="2">No.</th>
                <th rowspan="2">Perspektif</th>
                <th colspan="2"><em>Key Address</em></th>
                <th rowspan="2">Indikator Kinerja Utama</th>
                <th rowspan="2">Target</em></th>
                <th rowspan="2">Satuan</th>
                <th rowspan="2">Polaritas</th>
                <th rowspan="2">Bobot</th>
                <th rowspan="2">Program Kerja</th>
                <th rowspan="2">Penanggung Jawab</th>
                <th rowspan="2">Aksi</th>
            </tr>
            <tr>
                <th>IKU Atasan</th>
                <th>Target</th>
            </tr>
        </thead>
        
        <?php $j = 1; ?>
            @php
              $groupedData = $iku->groupBy('perspektif.desc_perspektif');
            @endphp
            @foreach ($groupedData as $groupedValue => $dataArray)
              @php
                $rowspan = $dataArray->count();
              @endphp
              <tr>
                {{-- <th scope = "row"><?= $j++; ?> --}}
                <td rowspan="{{ $rowspan }}">{{ $j++ }}</td>
                <td rowspan="{{ $rowspan }}">{{ $groupedValue }}</td>
                <td>{{ $dataArray[0]->ikuatasan }}</td>
                <td>{{ $dataArray[0]->target_ka }}</td>
                <td>{{ $dataArray[0]->iku }}</td>
                <td>{{ $dataArray[0]->target_iku }}</td>
                <td>{{ $dataArray[0]->satuan }}</td>
                <td>{{ $dataArray[0]->polaritas }}</td>
                <td>{{ $dataArray[0]->bobot }}</td>
                <td>{{ $dataArray[0]->programkerja }}</td>
                <td>{{ $dataArray[0]->pj }}</td>

                <td>
                    <form action="{{ route("iku.edit", $dataArray[0]->id) }}" method="get" class="d-inline">
                        @csrf
                        <button class="badge bg-warning" onclick="return confirm('Anda yakin ingin mengubah data?')">Edit</button>
                    </form>

                    <form action="{{ route("iku.destroy", $dataArray[0]->id) }}" method="post" class="d-inline">
                        @csrf
                        <button class="badge bg-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</button>
                    </form>
                </td>
              </tr>
              @for ($i = 1; $i < $rowspan; $i++)
                <tr>
                    <td>{{ $dataArray[$i]->ikuatasan }}</td>
                    <td>{{ $dataArray[$i]->target_ka }}</td>
                    <td>{{ $dataArray[$i]->iku }}</td>
                    <td>{{ $dataArray[$i]->target_iku }}</td>
                    <td>{{ $dataArray[$i]->satuan }}</td>
                    <td>{{ $dataArray[$i]->polaritas }}</td>
                    <td>{{ $dataArray[$i]->bobot }}</td>
                    <td>{{ $dataArray[$i]->programkerja }}</td>
                    <td>{{ $dataArray[$i]->pj }}</td>

                    <td>
                        <form action="{{ route("iku.edit", $dataArray[$i]->id) }}" method="get" class="d-inline">
                            @csrf
                            <button class="badge bg-warning" onclick="return confirm('Anda yakin ingin mengubah data?')">Edit</button>
                        </form>
    
                        <form action="{{ route("iku.destroy", $dataArray[$i]->id) }}" method="post" class="d-inline">
                            @csrf
                            <button class="badge bg-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</button>
                        </form>
                    </td>
                </tr>
              @endfor
            @endforeach
          </tbody>
    </table>
</div>

@endsection
