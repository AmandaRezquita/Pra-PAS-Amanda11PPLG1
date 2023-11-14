<?php

namespace App\Http\Controllers;

use App\Models\Sma;
use Illuminate\Http\Request;

class SmaController extends Controller
{
    public function index()
    {
        return view('sma.all', [
            "title" => "Sma",
            "smadb" => Sma::all()
        ]);
    }

    public function show(Sma $sma)
    {
        return view('sma.detail', ['sma' => $sma]);
    }
}
