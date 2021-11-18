<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        $pembeli = Pembeli::with('kelas')->get();
        return view('member.pembeli.index', compact('pembeli'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = Kelas::all();
        return view('member.pembeli.create', compact('kelas'));
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
            'nama_pembeli' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'id_kelas' => 'required',
        ]);

        $pembeli = new pembeli;
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->alamat = $request->alamat;
        $pembeli->no_telp = $request->no_telp;
        $pembeli->id_kelas = $request->id_kelas;
        $pembeli->save();
        return redirect()->route('tiket.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pembeli  $pembeli
     * @return \Illuminate\Http\Response
     */

}
