<?php

namespace App\Http\Controllers\Admin;

use Log;
use Carbon\Carbon;
use App\Models\Type;
use App\Models\User;
use App\Models\Metode;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PenjualanController extends Controller
{
    public function index(Penjualan $penjualan)
    {

        return view('pages.admin.penjualan', [
            'penjualans' => $penjualan->all(),
            'daftarUser' => User::all(),
            'properties' => Penjualan::all(),
            'types' => Type::all(),
            'metodes' => Metode::all(),
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $data = $request->validate([
            'nama_property' => 'required',
            'nama_type' => 'required',
            'user_id' => 'required',
            'alamat' => 'required',
            'status_kawin' => 'required',
            'jumlah_pembayaran' => 'required',
            'metode' => 'required',
            'nominal_harga' => 'required',
            'nominal_dp' => 'required',
            'no_rek' => 'required',
            'nama_bank' => 'required',
            'pekerjaan' => 'required',
            'nama_tempat_bekerja' => 'required',
            'alamat_tempat_bekerja' => 'required',
            'gaji' => 'required',
            'nama_orang_terdekat' => 'required',
            'no_hp_orang_terdekat' => 'required',
            'alamat_orang_terdekat' => 'required',
            'foto_ktp' => 'required',




        ]);
        $file = $request->file('foto_ktp');
        $filename = 'ktp' . '-' . time() . '-'  . $file->extension();
        $file->move(public_path('img/penjualan/foto_ktp'), $filename);
        $data['foto_ktp'] = $filename;
        $data['tanggal'] = Carbon::now();
       Penjualan::create($data);

       return redirect()->back()->with('success', 'Berhasil Menambahkan Data Penjualan');


    }

    public function edit(Penjualan $penjualan)
    {
        return view('pages.admin.penjualan-edit', [
            'penjualan' => $penjualan,
        ]);
    }

    public function update(Request $request, Penjualan $penjualan)
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

     $penjualan->update($data);

        return redirect()->back()->with('success', 'Berhasil Mengubah Data Penjualan');
    }

    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data Penjualan');
    }
}
