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
use App\Models\Harga;
use App\Models\Property;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualan = Penjualan::all()->pluck('nama_property');
        // $pelunasanMetode = Metode::where('id' , $penjualan->metode)->first();
        return view('pages.admin.penjualan', [
            'daftarUser' => User::all(),
            'properties' => Property::whereNotIn('property', $penjualan)->get(),
            'types' => Type::all(),
            'metodes' => Metode::all(),
            'daftarPenjualan' => Penjualan::all(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'property' => 'required',
            'customer' => 'required',
            'alamat' => 'required',
            'status_kawin' => 'required',
            'metode' => 'required',
            'no_rek' => 'required',
            'nama_bank' => 'required',
            'pekerjaan' => 'required',
            'nama_tempat_bekerja' => 'required',
            'alamat_tempat_bekerja' => 'required',
            'gaji' => 'required',
            'nama_orang_terdekat' => 'required',
            'no_hp_orang_terdekat' => 'required',
            'alamat_orang_terdekat' => 'required',
            'foto_ktp' => 'required'
        ]);

        $property = Property::find($data['property']);
        $metode = Metode::find($data['metode']);
        $harga = Harga::where('property_id', $property->id)->where('metode_id', $data['metode'])->first();

        $data['nama_property'] = $property->property;
        $data['nama_type'] = $property->types->nama_type;
        $data['user_id'] = $data['customer'];
        $data['jumlah_pembayaran'] = $metode->jumlah_pembayaran;
        $data['nominal_dp'] =  convertToNumber($harga->nominal_dp);
        $data['nominal_harga'] = convertToNumber($harga->nominal);

        $file = $request->file('foto_ktp');
        $filename = 'ktp' . '-' . time() . '.'  . $file->extension();
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

    public function detail(Penjualan $penjualan)

    {
        $metode = Metode::where('id' , $penjualan->metode)->first();


        $property = Property::where('property' , $penjualan->nama_property)->first();
        return view('pages.admin.penjualan-detail', [
            'penjualan' => $penjualan,
            'property' => $property,
            'metodes' => $metode

        ]);
    }

    public function destroy(Penjualan $penjualan)
    {
        $penjualan->delete();
        return redirect()->back()->with('success', 'Berhasil Menghapus Data Penjualan');
    }
}
