<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IKUModel;

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
        return redirect('/iku')->with('success', 'Data berhasil ditambahkan.');
    }
}
