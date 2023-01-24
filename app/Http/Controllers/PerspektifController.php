<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerspektifController extends Controller
{
    public function create ()
    {
        return view('perspektif.create', [
            "title" => "Perspektif | Add"
        ]);
    }
}
