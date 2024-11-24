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
            'user_id' => 'required',
            'no_rek' => 'required',
            'foto_ktp' => 'required',

        ]);



        $file = $request->file('foto_ktp');
        $filename = 'ktp' . '-' . time() . '-'  . $file->extension();
        $file->move(public_path('img/foto_ktp'), $filename);


        $data['foto_ktp'] = $filename;
        $data['tanggal'] = Carbon::now();
        Booking::create($data);


        return redirect()->route('user.index')->with('success', 'Berhasil Melakukan Pengajuan Booking Property, Mohon Menunggu Konfirmasi Melalui Email Anda');
    }

    public function detail(Booking $booking)
    {
        $property = Property::where('property', $booking->nama_property)->first();
        return view('pages.user.booking-detail', [
            'booking' => $booking,
            'property' => $property
        ]);
    }
}
