<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Metode;
use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\FunctionUnit;

class MetodeController extends Controller
{
    public function index(){
        return view('pages.admin.metode', [
            'metodes' => Metode::all(),]);
    }

    public  function store(Request $request){
        $data = $request->validate([
            'nama' => 'required',
            'jumlah_pembayaran' => 'required',
        ]);

        Metode::create($data);
        return redirect()->back()->with('success', 'Berhasil Menambahkan Data Metode');
    }

    public function edit(Metode $metode){
        return view('pages.admin.edit_metode', [
            'metodes' => $metode]);
    }
    public function update(Request $request, Metode $metode)
     {
        $data = $request->validate([
            'nama' => 'required',
            'jumlah_pembayaran' => 'required',
        ]);

        $metode->update($data);
        return redirect()->back()->with('success', 'Berhasil Mengupdate Data Metode');

    }

    public function destroy(Metode $metode){
        $metode->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data Metode');
    }
}
