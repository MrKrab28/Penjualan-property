<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index(Penjualan $penjualan)
    {

        return view('pages.admin.penjualan', [
            'penjualans' => $penjualan->all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_property' => 'required',
            'nama_type' => 'required',
            'user_id' => 'required',
            'no_rek' => 'required',
            'nama_bank' => 'required',
            'nominal_harga' => 'required',
            'nominal_dp' => 'required',
            'nominal_book' => 'required',
            'jumlah_pembayaran' => 'required',
            'foto_ktp' => 'required',
            'status_kawin' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'nama_tempat_bekerja' => 'required',
            'alamat_tempat_bekerja' => 'required',
            'pendapatan_perbulan' => 'required',
            'nama_orang_terdekat' => 'required',
            'alamat_orang_terdekat' => 'required',
            'no_hp_orang_terdekat' => 'required',


        ]);

    }
}
