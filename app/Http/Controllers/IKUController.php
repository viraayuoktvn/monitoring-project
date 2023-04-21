<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IKUModel;
use App\Models\PerspektifModel;
use App\Models\UnitKerjaModel;
use App\Models\BulanModel;
use App\Models\IKUModelV2;
use Illuminate\Support\Facades\DB;

class IKUController extends Controller
{
    public function index ()
    {
        $iku = IKUModel::all();
        $unitkerja = UnitKerjaModel::all();

        return view('iku/index', [
            "title" => "IKU",
            "iku" => $iku,
            "unitkerja" => $unitkerja
        ]);
    }

    public function filter(Request $request)
    {   
        $unitkerja = UnitKerjaModel::all();
        $iku = IKUModel::all();
        
        if ($request->tahun) {
            $iku = $iku->where('tahun', $request->tahun);
        }

        if ($request->unitkerja_name) {
            $unitkerja = UnitKerjaModel::where('name_dept', $request->unitkerja_name)->firstOrFail();
            $iku = $iku->where('unitkerja_id', $unitkerja->id);
        }

        // $iku = DB::table('iku')
        //             ->join('unitkerja', 'iku.unitkerja_id', '=', 'unitkerja.id')
        //             ->select('iku.*', 'unitkerja.name_dept')
        //             ->where('tahun', $tahun)
        //             ->where('unitkerja.name_dept', $unitkerja_name)
        //             ->get();
        
        return view('iku.index', [
            "title" => "IKU",
            "iku" => $iku,
            "unitkerja" => $unitkerja
        ]);
    }

    public function create ()
    {
        $perspektif = PerspektifModel::all();
        $unitkerja = UnitKerjaModel::all();

        return view('iku/create', [
            "title" => "IKU | Add",
            "perspektif" => $perspektif,
            "unitkerja" => $unitkerja
        ]);
    }

    public function edit($id)
    {
        $unitkerja = UnitKerjaModel::all();
        $perspektif = PerspektifModel::all();
        $iku = IKUModel::find($id);
        return view('iku/edit', [
            'title' => 'Edit IKU',
            'iku' => $iku,
            'perspektif' => $perspektif,
            'unitkerja' => $unitkerja
        ]);
    }

    public function update (Request $request, $id)
    {
        $this->validate($request, [
            'perspektif_id' => 'required'
        ]);

        $iku = IKUModel::find($id);

        $iku->tahun = $request->tahun;
        $iku->perspektif_id = $request->perspektif_id;
        $iku->unitkerja_id = $request->unitkerja_id;
        $iku->ikuatasan = $request->ikuatasan;
        $iku->target_ka = $request->target_ka;
        $iku->iku = $request->iku;
        $iku->target_iku = $request->target_iku;
        $iku->satuan = $request->satuan;
        $iku->polaritas = $request->polaritas;
        $iku->bobot = $request->bobot;
        $iku->programkerja = $request->programkerja;
        $iku->pj = $request->pj;

        $iku->update();
        return redirect('/iku/index')->with('success', 'Data berhasil diubah.');
    }

    public function store (Request $request)
    {
        $request->validate([
            'perspektif_id' => 'required'
        ]);

        $iku = new IKUModel;

        $iku->tahun = $request->tahun;
        $iku->perspektif_id = $request->perspektif_id;
        $iku->unitkerja_id = $request->unitkerja_id;
        $iku->ikuatasan = $request->ikuatasan;
        $iku->target_ka = $request->target_ka;
        $iku->iku = $request->iku;
        $iku->target_iku = $request->target_iku;
        $iku->satuan = $request->satuan;
        $iku->polaritas = $request->polaritas;
        $iku->bobot = $request->bobot;
        $iku->programkerja = $request->programkerja;
        $iku->pj = $request->pj;

        $iku->save();
        return redirect('/iku/index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function destroy($id)
    { 
        IKUModel::destroy($id);
        return redirect('/iku/index')->with('success', 'Data berhasil dihapus!');
    }

    public function eval_index ()
    {
        $evaliku = IKUModelV2::all();
        $unitkerja = UnitKerjaModel::all();
        $bulan = BulanModel::all();

        return view('iku/eval_index', [
            "title" => "IKU",
            "evaliku" => $evaliku,
            "unitkerja" => $unitkerja,
            "bulan" => $bulan
        ]);
    }

    public function eval_create ()
    {
        $iku = IKUModel::all();
        $bulan = BulanModel::all();

        return view('iku/eval_create', [
            "title" => "IKU | Add",
            "iku" => $iku,
            "bulan" => $bulan
        ]);
    }

    public function eval_store (Request $request)
    {
        $request->validate([
            'iku_id' => 'required'
        ]);

        $evaliku = new IKUModelV2();

        $evaliku->tahun = $request->tahun;
        $evaliku->iku_id = $request->iku_id;
        $evaliku->bulan_id = $request->bulan_id;
        $evaliku->real = $request->real::where('bulan', $evaliku->bulan_id)->first();

        $evaliku->save();
        return redirect('/iku/eval_index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function eval_edit($id)
    {
        $unitkerja = UnitKerjaModel::all();
        $perspektif = PerspektifModel::all();
        $iku = IKUModel::find($id);
        
        return view('iku/eval_edit', [
            'title' => 'Edit Evaluasi IKU',
            'iku' => $iku,
            'perspektif' => $perspektif,
            'unitkerja' => $unitkerja
        ]);
    }

    public function eval_update (Request $request, $id)
    {
        $this->validate($request, [
            'perspektif_id' => 'required'
        ]);

        $iku = IKUModel::find($id);

        $iku->tahun = $request->tahun;
        $iku->perspektif_id = $request->perspektif_id;
        $iku->unitkerja_id = $request->unitkerja_id;
        $iku->ikuatasan = $request->ikuatasan;
        $iku->target_ka = $request->target_ka;
        $iku->iku = $request->iku;
        $iku->target_iku = $request->target_iku;
        $iku->satuan = $request->satuan;
        $iku->polaritas = $request->polaritas;
        $iku->bobot = $request->bobot;
        $iku->programkerja = $request->programkerja;
        $iku->pj = $request->pj;

        $iku->update();
        return redirect('/iku/index')->with('success', 'Data berhasil diubah.');
    }
}
