<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IKUController extends Controller
{
    public function index ()
    {
        return view('iku/index', [
            "title" => "IKU"
        ]);
    }

    public function create ()
    {
        return view('iku/create', [
            "title" => "IKU | Add"
        ]);
    }
}
