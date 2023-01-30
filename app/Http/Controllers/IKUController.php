<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IKUModel;
use App\Models\IKUModelV2;

class IKUController extends Controller
{
    public function index ()
    {
        $iku = IKUModel::all();

        return view('iku/index', [
            "title" => "IKU",
            "iku" => $iku
        ]);
    }

    public function create ()
    {
        return view('iku/create', [
            "title" => "IKU | Add"
        ]);
    }

    public function store (Request $request)
    {
        $request->validate([
            'perspektif' => 'required'
        ]);

        $iku = new IKUModel();

        $iku->tahun = $request->tahun;
        $iku->perspektif = $request->perspektif;
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

    public function indexv2 ()
    {
        $iku1 = IKUModelV2::all();

        return view('iku/index2', [
            "title" => "IKU",
            "iku1" => $iku1
        ]);
    }

    public function createv2 ()
    {
        return view('iku/create2', [
            "title" => "IKU | Add"
        ]);
    }

    public function storev2 (Request $request)
    {
        $request->validate([
            'kpi' => 'required'
        ]);

        $iku1 = new IKUModelV2();

        $iku1->tahun = $request->tahun;
        $iku1->kpi = $request->kpi;
        $iku1->bobot = $request->bobot;
        $iku1->target = $request->target;
        $iku1->satuan = $request->satuan;
        $iku1->bulan = $request->bulan;

        $iku1->save();
        return redirect('/iku/indexv2')->with('success', 'Data berhasil ditambahkan.');
    }
}
