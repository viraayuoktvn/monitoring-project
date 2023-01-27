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
}
