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
        // $kontrak = Kontrak_Manajemen::with('perspektif');
        // $perspektif = PerspektifModel::all();
        $kontrak = Kontrak_Manajemen::all();
        
        return view('kontrak_manajemen/index', [
            "title" => "Kontrak Manajemen",
            "kontrak" => $kontrak,
            // "perspektif" => $perspektif
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
        // $request->validate([
        //     'perspektif_id' => 'required'
        // ]);

        $kontrak = new Kontrak_Manajemen;
        $perspektif = new PerspektifModel;

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




    public function indexv2()
    {
        $kontrak1 = Kontrak_ManajemenV2::all();
        
        return view('kontrak_manajemen/index2', [
            "title" => "Kontrak Manajemen",
            "kontrak1" => $kontrak1
        ]);
    }

    public function createv2()
    {
        return view('kontrak_manajemen/create2', [
            "title" => "Kontrak Manajemen | Add"
        ]);
    }

    public function storev2 (Request $request)
    {
        $request->validate([
            'kpi' => 'required'
        ]);

        $kontrak1 = new Kontrak_ManajemenV2;

        $kontrak1->tahun = $request->tahun;
        $kontrak1->kpi = $request->kpi;
        $kontrak1->bobot = $request->bobot;
        $kontrak1->target = $request->target;
        $kontrak1->satuan = $request->satuan;
        $kontrak1->real = $request->real;

        $kontrak1->save();
        return redirect('/kontrak_manajemen/indexv2')->with('success', 'Data berhasil ditambahkan.');
    }

}
