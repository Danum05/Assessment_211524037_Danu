<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Tenan;
use App\Models\Kasir;

class TransaksiController extends Controller
{
    public function create()
    {
        $tenans = Tenan::all();
        $kasirs = Kasir::all();

        return view('transaksi.create', compact('tenan', 'kasir'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeNota' => 'required|unique:transaksis',
            'KodeTenan' => 'required|exists:tenans,id',
            'KodeKasir' => 'required|exists:kasirs,id',
            'TglNota' => 'required|date',
            'JamNota' => 'required|date_format:H:i',
            'JumlahBelanja' => 'required|numeric',
            'Diskon' => 'required|numeric',
            'Total' => 'required|numeric',
        ]);

        Transaksi::create($request->all());

        return redirect()->to('transaksi')->with('success', 'Transaksi berhasil ditambahkan');
    }

    public function show($id)
    {
        $transaksi = Transaksi::findOrFail($id);

        return view('transaksi.show', compact('transaksi'));
    }
}
