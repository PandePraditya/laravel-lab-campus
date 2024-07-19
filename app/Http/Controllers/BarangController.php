<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::with('ruangan')->paginate(5);
        return view('barang.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ruangans = Ruangan::all();
        return view('barang.create', compact('ruangans'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_ruangan' => 'required|exists:ruangan,id',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'jumlah_barang' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        Barang::create([
            'kode_ruangan' => $request->kode_ruangan,
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('barang');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barangs = Barang::find($id);
        return view('barang.show', compact('barangs'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barangs = Barang::find($id);
        $ruangans = Ruangan::all();
        return view('barang.edit', compact('barangs', 'ruangans'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kode_ruangan' => 'required|exists:ruangan,id',
            'nama_barang' => 'required',
            'jenis_barang' => 'required',
            'jumlah_barang' => 'required|numeric',
            'keterangan' => 'required',
        ]);

        Barang::where('id', '=', $id)->update([
            'kode_ruangan' => $request->kode_ruangan,
            'nama_barang' => $request->nama_barang,
            'jenis_barang' => $request->jenis_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::where('id', '=', $id)->delete();
        return redirect('barang');
    }
}
