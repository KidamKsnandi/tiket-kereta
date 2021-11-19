<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use App\Models\Pembeli;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TiketController extends Controller
{
    public function index()
    {
         $tiket = Tiket::with('pembeli')->get();
         $tiket = Tiket::with('kereta')->get();
        return view('member.tiket.index', compact('tiket'));
    }


    public function create()
    {
        $kereta = Kereta::all();
        $pembeli = Pembeli::all();
        return view('member.tiket.create', compact('pembeli','kereta'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_booking' => 'required|unique:tikets',
            'id_pembeli' => 'required',
            'id_kereta' => 'required',
            'jumlah' => 'required',
            'dari' => 'required',
            'ke' => 'required',
        ]);

        $tiket = new Tiket();
        $tiket->kode_booking = $request->kode_booking;
        $tiket->id_pembeli = $request->id_pembeli;
        $tiket->id_kereta = $request->id_kereta;
        $tiket->jumlah = $request->jumlah;
        $tiket->dari = $request->dari;
        $tiket->ke = $request->ke;
        $tiket->save();
        return redirect()->route('tiket.index');
    }

    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();
        return redirect()->route('tiket.index');
    }
}
