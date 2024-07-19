<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ruangans = Ruangan::paginate(5);
        return view('ruangan.index', compact('ruangans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ruangan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // digits_between : 3,10 artinya minimal 3 digit dan maksimal 10
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|unique:ruangan|digits_between:3,10',
            'nama_ruangan' => 'required',
            'lokasi' => 'required',
        ]);

        Ruangan::create([
            'id' => $request->id,
            'nama_ruangan' => $request->nama_ruangan,
            'lokasi' => $request->lokasi,
        ]);

        return redirect('ruangan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ruangans = Ruangan::find($id);
        return view('ruangan.show', compact('ruangans'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ruangans = Ruangan::find($id);
        return view('ruangan.edit', compact('ruangans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_ruangan' => 'required',
            'lokasi' => 'required',
        ]);

        Ruangan::where('id', '=', $id)->update([
            'nama_ruangan' => $request->nama_ruangan,
            'lokasi' => $request->lokasi,
        ]);

        return redirect('ruangan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // hapus semua data di tabel barang yang mempunyai kode ruangan yang sama
        Barang::where('kode_ruangan', $id)->delete();
        Ruangan::where('id', $id)->delete();

        return redirect('ruangan');
    }
}
