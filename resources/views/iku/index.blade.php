@extends('layouts.main')

@section('content')

<div class="col-md-12">
    <h1 class="mt-4"> INDIKATOR KINERJA UTAMA </h1>
    <hr>
    <a href="/iku/create" class="btn mb-3">Add New</a>
    
    <table class="table text-center">
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
            </tr>
            <tr>
                <th>IKU Atasan</th>
                <th>Target</th>
            </tr>
        </thead>
        
        <tbody>
            <?php $i = 1; ?>
            <?php foreach($iku as $ik) : ?>
            <tr>
                <th scope = "row"><?= $i++; ?>
                <td><?= $ik['perspektif']; ?></td>
                <td><?= $ik['ikuatasan']; ?></td>
                <td><?= $ik['target_ka']; ?></td>
                <td><?= $ik['iku']; ?></td>
                <td><?= $ik['target_iku']; ?></td>
                <td><?= $ik['satuan']; ?></td>
                <td><?= $ik['polaritas']; ?></td>
                <td><?= $ik['bobot']; ?></td>
                <td><?= $ik['programkerja']; ?></td>
                <td><?= $ik['pj']; ?></td>
            </tr>
        <?php endforeach ?>
        </tbody>
    </table>
</div>

@endsection
