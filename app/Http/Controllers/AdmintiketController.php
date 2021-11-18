<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use App\Models\Pembeli;
use App\Models\Tiket;
use Illuminate\Http\Request;

class AdmintiketController extends Controller
{
    public function index()
    {
        $tiket = Tiket::with('pembeli')->get();
        $tiket = Tiket::with('kereta')->get();
        return view('admin.tiket.index', compact('tiket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiket = Tiket::findOrFail($id);
        $pembeli = Pembeli::all();
        $kereta = Kereta::all();
        return view('admin.tiket.edit', compact('tiket', 'pembeli', 'kereta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_booking' => 'required',
            'id_pembeli' => 'required',
            'id_kereta' => 'required',
            'jumlah' => 'required',
            'dari' => 'required',
            'ke' => 'required',
        ]);

        $tiket = Tiket::findOrFail($id);
        $tiket->kode_booking = $request->kode_booking;
        $tiket->id_pembeli = $request->id_pembeli;
        $tiket->id_kereta = $request->id_kereta;
        $tiket->jumlah = $request->jumlah;
        $tiket->dari = $request->dari;
        $tiket->ke = $request->ke;
        $tiket->save();
        return redirect()->route('atiket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiket  $tiket
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tiket = Tiket::findOrFail($id);
        $tiket->delete();
        return redirect()->route('atiket.index');
    }
}
