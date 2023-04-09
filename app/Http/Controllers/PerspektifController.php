<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerspektifModel;

class PerspektifController extends Controller
{
    public function index()
    {
        $perspektif = PerspektifModel::all();
        return view('perspektif/index', [
            "title" => "Perspektif",
            "perspektif" => $perspektif,
           
        ]);
    }
    public function create ()
    {
        return view('perspektif.create', [
            "title" => "Perspektif | Add"
        ]);
    }

    public function store (Request $request)
    {
        $request->validate([
            'name_perspektif' => 'required'
        ]);

        $perspektif = new PerspektifModel;

        $perspektif->name_perspektif = $request->name_perspektif;
        $perspektif->desc_perspektif = $request->desc_perspektif;

        $perspektif->save();
        return redirect('/perspektif')->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $perspektif = PerspektifModel::find($id);
        return view('perspektif/edit', [
            'title' => 'Edit Perspektif',
            'perspektif' => $perspektif
        ]);
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name_perspektif' => 'required'
        ]);
    
        $perspektif = PerspektifModel::find($id);
        
        $perspektif->name_perspektif = $request->name_perspektif;
        $perspektif->desc_perspektif = $request->desc_perspektif;

        $perspektif->update();
    
        return redirect('/perspektif')->with('success', 'Perspektif berhasil diubah.');
    }

    public function destroy($id)
    { 
        PerspektifModel::destroy($id);
        return redirect('/perspektif')->with('success', 'Data berhasil dihapus!');
    }
}
