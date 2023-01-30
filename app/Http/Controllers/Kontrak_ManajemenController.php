<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontrak_Manajemen;

class Kontrak_ManajemenController extends Controller
{
    public function index()
    {
        $kontrak = Kontrak_Manajemen::all();
        
        return view('kontrak_manajemen/index', [
            "title" => "Kontrak Manajemen",
            "kontrak" => $kontrak
        ]);
    }

    public function create()
    {
        return view('kontrak_manajemen/create', [
            "title" => "Kontrak Manajemen | Add"
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'sasaranstrategis' => 'required'
        ]);

        $kontrak = new Kontrak_Manajemen;

        $kontrak->tahun = $request->tahun;
        $kontrak->sasaranstrategis = $request->sasaranstrategis;
        $kontrak->kpi = $request->kpi;
        $kontrak->target = $request->target;
        $kontrak->satuan = $request->satuan;
        $kontrak->polaritas = $request->polaritas;
        $kontrak->bobot = $request->bobot;
        $kontrak->pd = $request->pd;
        $kontrak->hcfd = $request->hcfd;

        $kontrak->save();
        // return redirect()->route('kontrak_manajemen')->with('success', 'Data berhasil ditambahkan.');
        return redirect('/kontrak_manajemen')->with('success', 'Data berhasil ditambahkan.');
    }

}
