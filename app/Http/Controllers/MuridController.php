<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    public function index()
    {
        return view('murid.all', [
            "title" => "Murid",
            "murid" => Murid::all()
        ]);
    }

    public function show(Murid $murid)
    {
        return view('murid.detail', ['murid' => $murid]);
    }
}
