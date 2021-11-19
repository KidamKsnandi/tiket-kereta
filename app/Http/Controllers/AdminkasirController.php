<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kasir;
use App\Models\Kereta;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class AdminkasirController extends Controller
{
    public function index()
    {
        $kasir = Kasir::with('booking')->get();
        return view('admin.transaksi.index', compact('kasir'));
    }

    public function create()
    {
        $booking = Booking::all();
        return view('admin.transaksi.create', compact('booking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_booking' => 'required',
            'nama_kasir' => 'required',
            'jumlah' => 'required',
            'harga' => 'required',
            'uang' => 'required',
        ]);

        $kasir = new Kasir();
        $kasir->id_booking = $request->id_booking;
        $kasir->nama_kasir = $request->nama_kasir;
        $kasir->jumlah = $request->jumlah;
        $kasir->harga = $request->harga;
        $kasir->total_harga = $kasir->harga * $kasir->jumlah;
        $kasir->uang = $request->uang;
        $kasir->kembalian = $kasir->uang - $kasir->total_harga;
        $kasir->save();
        return redirect()->route('atransaksi.index');
    }

    public function destroy($id)
    {
        $kasir = Kasir::findOrFail($id);
        $kasir->delete();
        return redirect()->route('atransaksi.index');
    }

}
