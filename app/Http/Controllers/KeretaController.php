<?php

namespace App\Http\Controllers;

use App\Models\Kereta;
use Illuminate\Http\Request;

class KeretaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kereta = Kereta::all();
        return view('petugas.kereta.index', compact('kereta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.kereta.create');
    }

    public function store(Request $request)
    {
        //Validasi data
        $validated = $request->validate([
            'nama_kereta' => 'required',
            'jm_berangkat' => 'required',
            'jm_tiba' => 'required'
        ]);

        $kereta = new Kereta;
        $kereta->nama_kereta = $request->nama_kereta;
        $kereta->jm_berangkat = $request->jm_berangkat;
        $kereta->jm_tiba = $request->jm_tiba;
        $kereta->save();
        return redirect()->route('kereta.index');
    }

    public function show($id)
    {
        $kereta = Kereta::findOrFail($id);
        return view('petugas.kereta.show', compact('kereta'));
    }

    public function edit($id)
    {
        $kereta = Kereta::findOrFail($id);
        return view('petugas.kereta.edit', compact('kereta'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $validated = $request->validate([
            'nama_kereta' => 'required',
            'jm_berangkat' => 'required',
            'jm_tiba' => 'required',
        ]);

        $kereta = Kereta::findOrFail($id);
        $kereta->nama_kereta = $request->nama_kereta;
        $kereta->jm_berangkat = $request->jm_berangkat;
        $kereta->jm_tiba = $request->jm_tiba;
        $kereta->save();
        return redirect()->route('kereta.index');
    }

    public function destroy($id)
    {
        $kereta = Kereta::findOrFail($id);
        $kereta->delete();
        return redirect()->route('kereta.index');
    }
}
