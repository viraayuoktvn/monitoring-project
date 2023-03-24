<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IKUModel;
use App\Models\PerspektifModel;
use App\Models\UnitKerjaModel;
use App\Models\BulanModel;
use App\Models\IKUModelV2;

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

    public function eval_destroy()
    {
        
    }
}
