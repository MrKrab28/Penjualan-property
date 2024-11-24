<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cicilan;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class CicilanController extends Controller
{

    public function index()
    {
        return view('pages.admin.cicilan');
    }

    public function detail(Penjualan $penjualan, Request $request)
    {
        if ($request->has('penjualan')) {
            $penjualan = Penjualan::find($request->penjualan);
            return view('pages.admin.cicilan-detail', [
                'penjualan' => $penjualan
            ]);
        }
    }

    function convertToNumber(string $value): float
    {
        return (float)str_replace(',', '', $value);
    }


    public function store(Request $request)
    {

        $request->validate([

            'tgl_cicilan' => 'required',
        ]);

        $penjualanLalu = Penjualan::where('id', $request->penjualan)->first();

        $hargaProperty = $this->convertToNumber($penjualanLalu->nominal_harga);
        $nominal_cicilan = $hargaProperty / $penjualanLalu->jumlah_pembayaran;
        $penjualan = Penjualan::find($request->penjualan);
        $cicil = new Cicilan();
        $cicil->penjualan_id = $penjualan->id;
        $cicil->nominal_cicilan = round($nominal_cicilan);

        $cicil->tgl_cicilan = $request->tgl_cicilan;
        $cicil->save();
        return redirect()->back()->with('success', 'Berhasil Menambah Data Cicilan');
    }
}
