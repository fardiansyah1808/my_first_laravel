<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $name = "Fardiansyah";
        $pelajaran = ["Algoritma", "Kalkulus", "Pemrograman PHP"];
        return view("dosen", ["name" => $name, "pelajaran" => $pelajaran]);
    }
}
