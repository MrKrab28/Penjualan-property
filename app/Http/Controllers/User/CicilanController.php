<?php

namespace App\Http\Controllers\User;

use App\Models\Property;
use App\Models\Penjualan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CicilanController extends Controller
{
    public function index()
    {
        $property = Property::first(); // Ambil properti pertama
        $penjualan = Penjualan::where('user_id', auth()->user()->id)->first();

        return view('pages.user.cicilan', [
            'penjualan' => $penjualan,
            'property' => $property,

        ]);
    }
}
