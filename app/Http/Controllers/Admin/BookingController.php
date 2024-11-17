<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Booking $booking)
    {
        return view('pages.admin.booking',[
            'bookings' => $booking->all(),]);
    }

    public function edit(Booking $booking)
    {
        return view('pages.admin.booking-edit',[
            'booking' => $booking,
        ]);
    }



    public function statusTerima(Booking $booking)
    {



       $status = Booking::find($booking->id);
       $status->status = 'diterima';
       $status->update();


        return redirect()->back()->with('success', 'Status Berhasil Diubah');
    }

    public function statusTolak(Booking $booking)
    {
        $status = Booking::find($booking->id);
        $status->status = 'ditolak';
        $status->update();

        return redirect()->back()->with('success', 'Status Berhasil Diubah');
    }
}
