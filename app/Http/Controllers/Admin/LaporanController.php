<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
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
        // $penjualan = Penjualan::with(['cicilan', 'harga', 'properti'])->get();

        // // Load data pendukung
        // $metode = Metode::all();
        // $harga = Harga::all();
        // $property = Property::all();

        // $pdf = PDF::loadview('pages.admin.laporan-penjualan-cetak', [
        //     'penjualans' => $penjualan,
        //     'metodes' => $metode,
        //     'hargas' => $harga,
        //     'properties' => $property
        // ]);
        // return $pdf->stream('laporan-penjualan-cetak.pdf');
        return view('pages.admin.laporan-penjualan');
    }

    public function penjualanIndex(Request $request){
        $bulan = $request->input('bulan', Carbon::now()->month);
        $tahun = $request->input('tahun', Carbon::now()->year);

        // Filter data penjualan berdasarkan bulan dan tahun pada created_at
        $penjualan = Penjualan::with(['cicilan', 'harga', 'properti'])
            ->whereMonth('created_at', $bulan)
            ->whereYear('created_at', $tahun)
            ->get();

        // Load data pendukung
        $metode = Metode::all();
        $harga = Harga::all();
        $property = Property::all();

        // Generate PDF
        $pdf = PDF::loadview('pages.admin.laporan-penjualan-cetak', [
            'penjualans' => $penjualan,
            'metodes' => $metode,
            'hargas' => $harga,
            'properties' => $property,
            'bulan' => $bulan,
            'tahun' => $tahun
        ]);

        return $pdf->stream('laporan-penjualan-cetak.pdf');
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
