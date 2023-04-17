<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontrak_Manajemen;
use App\Models\PerspektifModel;
use App\Models\Kontrak_ManajemenV2;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;


class Kontrak_ManajemenController extends Controller
{
    public function index(Request $request)
    {
        // $kontrak = Kontrak_Manajemen::all();

        $kontrak = Kontrak_Manajemen::where($request->tahun, function ($query) use ($request) {
            return $query->whereYear($request->tahun);
        });
        return view('kontrak_manajemen/index', [
            "title" => "Kontrak Manajemen",
            "kontrak" => $kontrak,
           
        ]);
    }

    public function create()
    {
        $kontrak = Kontrak_Manajemen::all();
        $perspektif = PerspektifModel::all();

        return view('kontrak_manajemen/create', [
            "title" => "Kontrak Manajemen | Add",
            "perspektif" => $perspektif,
            'kontrak' => $kontrak
        ]);
    }

    public function edit($id)
    {
        $perspektif = PerspektifModel::all();
        $kontrak = Kontrak_Manajemen::find($id);
        return view('kontrak_manajemen/edit', [
            'title' => 'Edit Kontrak Manajemen',
            'kontrak' => $kontrak,
            'perspektif' => $perspektif
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

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'perspektif_id' => 'required'
        ]);
    
        $kontrak = Kontrak_Manajemen::find($id);
        
        $kontrak->tahun = $request->tahun;
        $kontrak->perspektif_id = $request->perspektif_id;
        $kontrak->kpi = $request->kpi;
        $kontrak->target = $request->target;
        $kontrak->satuan = $request->satuan;
        $kontrak->polaritas = $request->polaritas;
        $kontrak->bobot = $request->bobot;
        $kontrak->pd = $request->pd;
        $kontrak->hcfd = $request->hcfd;

        $kontrak->update();
    
        return redirect('/kontrak_manajemen/index')->with('success', 'Kontrak Manajemen berhasil diubah.');
    }

    public function destroy($id)
    { 
        Kontrak_Manajemen::destroy($id);
        return redirect('/kontrak_manajemen/index')->with('success', 'Data berhasil dihapus!');
    }

    // public function filterByYear (Request $request)
    // {
    //     $tahun = $request->input('tahun');
    //     // $data = Data::where('tahun', $tahun)->get();
    //     return view ('kontrak_manajemen.index', compact('data'));
    // }

    // public function filterByYear(Request $request){
    //     $kontrak = Kontrak_Manajemen::all();
    //     $tahun = $request->input('tahun');

    //     $data = DB::table('kontrakmanajemen')
    //                 ->whereYear('tahun', $tahun)
    //                 ->get();
        
    //     return view('kontrak_manajemen/index', [
    //         'title' => 'Kontrak Manajemen',
    //         'data' => $data,
    //         'kontrak' => $kontrak
    //     ]);
    // }

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
        $evalkontrak = Kontrak_ManajemenV2::all();

        return view('kontrak_manajemen/eval_create', [
            'title' => "Evaluasi Kontrak Manajemen | Add",
            'evalkontrak' => $evalkontrak,
            'kontrak' => $kontrak
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

    public function eval_edit($id)
    {
        $kontrak = Kontrak_Manajemen::all();
        $perspektif = PerspektifModel::all();
        $evalkontrak = Kontrak_ManajemenV2::find($id);
        return view('kontrak_manajemen/eval_edit', [
            'title' => 'Edit Evaluasi Kontrak Manajemen',
            'evalkontrak' => $evalkontrak,
            'perspektif' => $perspektif,
            'kontrak' => $kontrak
        ]);
    }

    public function eval_update(Request $request, $id)
    {

        $this->validate($request, [
            'kontrakmanajemen_id' => 'required'
        ]);

        $evalkontrak = Kontrak_ManajemenV2::find($id);

        $evalkontrak->tahun = $request->tahun;
        $evalkontrak->kontrakmanajemen_id = $request->kontrakmanajemen_id;
        $evalkontrak->real = $request->real;

        $evalkontrak->update();
    
        return redirect('/kontrak_manajemen/eval_index')->with('success', 'Evaluasi Kontrak Manajemen berhasil diubah.');
    }

    public function eval_destroy($id)
    { 
        Kontrak_ManajemenV2::destroy($id);
        return redirect('/kontrak_manajemen/eval_index')->with('success', 'Data berhasil dihapus!');
    }
}
