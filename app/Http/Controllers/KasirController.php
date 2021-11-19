<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Kasir;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kasir = Kasir::with('booking')->get();
        return view('member.transaksi.index', compact('kasir'));
    }
}
