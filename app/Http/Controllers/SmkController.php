<?php

namespace App\Http\Controllers;

use App\Models\Smk;
use Illuminate\Http\Request;

class SmkController extends Controller
{
    public function index()
    {
        return view('smk.all', [
            "title" => "Smk",
            "smkdb" => Smk::all()
        ]);
    }

    public function show(Smk $smk)
    {
        return view('smk.detail', ['smk' => $smk]);
    }
}