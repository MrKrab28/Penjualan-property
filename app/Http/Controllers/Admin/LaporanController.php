<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Harga;
use App\Models\Metode;
use App\Models\Cicilan;
use App\Models\Property;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class LaporanController extends Controller
{
    public function penjualan()
    {
        $penjualan = Penjualan::all();
        $metode = Metode::all();
        $harga = Harga::all();
        $property = Property::all();
     
        // $pdf = PDF::loadView('pages.admin.laporan-penjualan', compact('penjualan'));
        $pdf = PDF::loadview('pages.admin.laporan-penjualan', ['penjualans' => $penjualan, 'metodes' => $metode, 'hargas' => $harga, 'properties' => $property]);
        return $pdf->stream('laporan-penjualan.pdf');
    }

    public function keuangan()
    {
        $keuangan = Cicilan::all();
        $pdf = PDF::loadview('pages.admin.laporan-keuangan', [
            'keuangan' => $keuangan
        ]);
        return $pdf->download('laporan-keuangan.pdf');
    }

    public function property()
    {
        $property = Property::with(['types', 'spesifikasi', 'harga.metode'])->get();

        // Ambil daftar semua harga
        $propertyPrices = Harga::with('metode')->get();

        $pdf = PDF::loadview('pages.admin.laporan-property', [
            'property' => $property,
            'propertyPrices' => $propertyPrices
        ]);
        return $pdf->stream('laporan-property.pdf');
    }

    public function user()
    {
        $penjualan = Penjualan::all()->pluck('user_id');
        $users = User::whereIn('id', $penjualan)->get();



        return view('pages.admin.laporan-user', compact(['users']));
    }

    public function cetakUser(User $user)
    {
        $penjualan = Penjualan::where('user_id', $user->id)->get();
        $pdf = PDF::loadview('pages.admin.laporan-user-cetak', ['users' => $user, 'penjualans' => $penjualan]);

        return $pdf->stream('laporan-user.pdf');
    }
}
