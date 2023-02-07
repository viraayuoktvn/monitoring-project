<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontrak_Manajemen;
use App\Models\PerspektifModel;
use App\Models\Kontrak_ManajemenV2;


class Kontrak_ManajemenController extends Controller
{
    public function index()
    {
        $kontrak = Kontrak_Manajemen::all();
        
        return view('kontrak_manajemen/index', [
            "title" => "Kontrak Manajemen",
            "kontrak" => $kontrak,
        ]);
    }

    public function create()
    {
        $perspektif = PerspektifModel::all();

        return view('kontrak_manajemen/create', [
            "title" => "Kontrak Manajemen | Add",
            "perspektif" => $perspektif
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'perspektif_id' => 'required'
        ]);

        $kontrak = new Kontrak_Manajemen;

        $kontrak->tahun = $request->tahun;
        $kontrak->perspektif_id = $request->perspektif_id;
        $kontrak->kpi = $request->kpi;
        $kontrak->target = $request->target;
        $kontrak->satuan = $request->satuan;
        $kontrak->polaritas = $request->polaritas;
        $kontrak->bobot = $request->bobot;
        $kontrak->pd = $request->pd;
        $kontrak->hcfd = $request->hcfd;

        $kontrak->save();
        return redirect('/kontrak_manajemen/index')->with('success', 'Data berhasil ditambahkan.');
    }



    public function eval_index()
    {
        $evalkontrak = Kontrak_ManajemenV2::all();
        
        return view('kontrak_manajemen/eval_index', [
            "title" => "Evaluasi Kontrak Manajemen",
            "evalkontrak" => $evalkontrak
        ]);
    }

    public function eval_create()
    {
        $kontrak = Kontrak_Manajemen::all();

        return view('kontrak_manajemen/eval_create', [
            "title" => "Evaluasi Kontrak Manajemen | Add",
            "kontrak" => $kontrak
        ]);
    }

    public function eval_store (Request $request)
    {
        $request->validate([
            'kontrakmanajemen_id' => 'required'
        ]);

        $evalkontrak = new Kontrak_ManajemenV2;

        $evalkontrak->tahun = $request->tahun;
        $evalkontrak->kontrakmanajemen_id = $request->kontrakmanajemen_id;
        $evalkontrak->real = $request->real;

        $evalkontrak->save();
        return redirect('/kontrak_manajemen/eval_index')->with('success', 'Data berhasil ditambahkan.');
    }

}
