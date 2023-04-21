@extends('layouts.main')

@section('content')

@if($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

<div class="mt-0">
    <h1> PERSPEKTIF </h1>
    <hr>
    <div class="row justify-between">
        <div class="col">
            <form action="{{ route('perspektif.filter') }}" method="POST">
                @csrf
                <div class="form-group d-flex">
                    <select name="name_perspektif" id="name_perspektif" placeholder="Badan Pembuat" class="dropdown-tahun">
                        <option value="">Badan Pembuat</option>
                        @php $groupedData = $perspektif->groupBy('name_perspektif'); @endphp
                        @foreach ($groupedData as $groupedValue => $dataArray)
                            <option value="{{ $groupedValue }}">{{ $groupedValue }}</option>
                        @endforeach
                    </select>
                    <button type="submit" class="btn mt-1 h-50">Filter</button>
                    <a href="{{ route('perspektif.index') }}" class="btn mt-1 w-50 h-50">Reset Filter</a>
                </div>
            </form>
        </div>
        <div class="col">
            <a href="/perspektif/create" class="btn mb-3">Add New</a>
        </div>
    </div>
    
    <table class="table text-center" id="myTable">
        <thead>
            <tr>
                <th>No.</th>
                <th>Badan Pembuat</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            <?php $j = 1; ?>
            @php
            $groupedData = $perspektif->groupBy('name_perspektif');
          @endphp
            @foreach ($groupedData as $groupedValue => $dataArray)
              @php
                $rowspan = $dataArray->count();
              @endphp
              <tr>
                <td rowspan="{{ $rowspan }}">{{ $j++ }}</td>
                <td rowspan="{{ $rowspan }}">{{ $groupedValue }}</td>
                <td>{{ $dataArray[0]->desc_perspektif }}</td>

                <td>
                    <form action="{{ route("perspektif.edit", $dataArray[0]->id) }}" method="get" class="d-inline">
                        @csrf
                        <button class="badge bg-warning" onclick="return confirm('Anda yakin ingin mengubah data?')">Edit</button>
                    </form>

                    <form action="{{ route("perspektif.destroy", $dataArray[0]->id) }}" method="post" class="d-inline">
                        @csrf
                        <button class="badge bg-danger" onclick="return confirm('Anda yakin ingin menghapus data?')">Delete</button>
                    </form>
                </td>
                
              </tr>
              @for ($i = 1; $i < $rowspan; $i++)
                <tr>
                    <td>{{ $dataArray[$i]->desc_perspektif }}</td>

                    <td>
                        <form action="{{ route("perspektif.edit", $dataArray[$i]->id) }}" method="get" class="d-inline">
                            @csrf
                            <button class="badge bg-warning" onclick="return confirm('Anda yakin ingin mengubah data?')">Edit</button>
                        </form>
    
                        <form action="{{ route("perspektif.destroy", $dataArray[$i]->id) }}" method="post" class="d-inline">
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
