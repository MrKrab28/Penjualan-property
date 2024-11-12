<?php

namespace App\Http\Controllers\Admin;

use App\Models\Harga;
use App\Models\Metode;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HargaController extends Controller
{

    public function index(){
        return view('pages.admin.harga', [
            'hargas' => Harga::all(),
            'metodes' => Metode::all(),
            'properties' => Property::all(),
        ]);
    }

    public function store(Request $request){
        $data = $request->validate([
            'property_id' => 'required',
            'metode_id' => 'required',
            'nominal' => 'required',
            'nominal_dp' => 'required',
            'nominal_book' => 'required',
        ]);

        Harga::create($data);
        return redirect()->back()->with('success', 'Berhasil Menambahkan Data Harga');
    }

    public function edit(Harga $harga){
        return view('pages.admin.harga-edit', [
            'hargas' => $harga,
        ]);
    }

    public function update(Request $request, Harga $harga){
        $data = $request->validate([
            'property_id' => 'required',
            'metode_id' => 'required',
            'nominal' => 'required',
            'nominal_dp' => 'required',
            'nominal_book' => 'required',
        ]);

        $harga->update($data);
        return redirect()->back()->with('success', 'Berhasil Mengubah Data Harga');
    }

    public function destroy(Harga $harga){
        $harga->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data Harga');
    }
}
