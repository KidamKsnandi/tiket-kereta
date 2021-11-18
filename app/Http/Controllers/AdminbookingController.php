<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminbookingController extends Controller
{
    public function index()
    {
         $booking = Booking::with('tiket')->get();
        return view('admin.booking.index', compact('booking'));
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return redirect()->route('abooking.index');
    }
}
