<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use App\Models\Cicilan;
use App\Models\Property;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {

        return view('pages.admin.dashboard', [
            'penjualan' => Penjualan::all()->count(),
            'booking' => Booking::all()->count(),
            'cicilanLunas' => Penjualan::all()->filter(function ($penjualan) {
                return $penjualan->lunas;
            })->count(),
            'cicilanBelumLunas' => Penjualan::all()->filter(function ($penjualan) {
                return !$penjualan->lunas;
            })->count(),
            'properties' => Property::all()->count(),
        ]);
    }
}
