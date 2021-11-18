<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class AdminpembeliController extends Controller
{
    public function index()
    {
         $pembeli = Pembeli::with('kelas')->get();
        return view('admin.pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $kelas = Kelas::all();
        return view('admin.pembeli.edit', compact('pembeli', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pembeli' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_kelas' => 'required',
        ]);

        $pembeli = Pembeli::findOrFail($id);
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->alamat = $request->alamat;
        $pembeli->no_telp = $request->no_telp;
        $pembeli->id_kelas = $request->id_kelas;
        $pembeli->save();
        return redirect()->route('apembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        $pembeli->delete();
        return redirect()->route('apembeli.index');
    }
}
