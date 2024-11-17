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
            'nominal_harga' => 'required',
            'nominal_dp' => 'required',
            'nominal_book' => 'required',

        ]);
    }
}
