<?php

namespace App\Http\Controllers\User;

use Carbon\Carbon;
use App\Models\Booking;
use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{

    public function index(Property $property)
    {
        return view('pages.user.booking', [
            'property' => $property
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_property' => 'required',
            'nama_type' => 'required',
            'user_id' => 'required',
            'harga_book' => 'required',
            'no_rek' => 'required',
            'foto_ktp' => 'required',
            'tanggal' => 'required',
        ]);

        Booking::create($data);
        return redirect()->back()->with('success', 'Berhasil Melakukan Pengajuan Booking Property, Mohon Menunggu Konfirmasi Melalui Email Anda');
    }
}
