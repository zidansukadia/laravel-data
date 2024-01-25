<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create()
    {
        return view('mahasiswa.form');
    }
    public function store(Request $request)
    {
        Mahasiswa::create($request->all());

        return redirect()->route('mahasiswa.create')
            ->with('success', 'Data mahasiswa berhasil disimpan');
    }
}
