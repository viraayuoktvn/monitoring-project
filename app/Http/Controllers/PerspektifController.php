<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerspektifModel;

class PerspektifController extends Controller
{
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
}
