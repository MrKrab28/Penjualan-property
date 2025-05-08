<?php

namespace App\Http\Controllers\Admin;

use App\Models\Spesifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SpesifikasiController extends Controller
{
    public function index()
    {
        $speks = Spesifikasi::all();
        return view('pages.admin.spesifikasi', compact('speks'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_spesifikasi' => 'required',
            'luas_tanah' => 'required',
            'luas_bangunan' => 'required',
            'kamar' => 'required',
            'wc' => 'required',
        ]);

        Spesifikasi::create($data);
        return redirect()->back()->with('success', 'Berhasil Menambahkan Data Spesifikasi');
    }

    public function edit(Spesifikasi $spek)
    {
        return view('pages.admin.spesifikasi-edit', compact('spek'));
    }

    public function update(Request $request, Spesifikasi $spek)
    {
        $data = $request->validate([
            'nama_spesifikasi' => 'required',
            'luas_tanah' => 'required',
            'luas_bangunan' => 'required',
            'kamar' => 'required',
            'wc' => 'required',
        ]);

        $spek = Spesifikasi::find($spek->id);

        $spek->update($data);
        return redirect()->back()->with('success', 'Spesifikasi updated successfully');
    }

    public function destroy(Spesifikasi $spek)
    {
        $spek->delete();
        return redirect()->back()->with('success', 'Spesifikasi deleted successfully');
    }

}
