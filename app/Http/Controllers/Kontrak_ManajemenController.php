<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontrak_Manajemen;

class Kontrak_ManajemenController extends Controller
{
    public function index()
    {
        return view('kontrak_manajemen/index', [
            "title" => "Kontrak Manajemen",
            "table" => Kontrak_Manajemen::all()
        ]);
    }

    public function create()
    {
        return view('kontrak_manajemen/create', [
            "title" => "Kontrak Manajemen | Add"
        ]);
    }
}
