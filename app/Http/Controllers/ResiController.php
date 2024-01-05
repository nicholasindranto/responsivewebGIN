<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resi;
use Carbon\Carbon;

class ResiController extends Controller
{
    public function index()
    {
        // Tampilkan daftar post
        $resis = Resi::all();
        return view('resis.index', compact('resis'));
    }

    public function create()
    {
        // Tampilkan formulir untuk membuat post baru
        return view('resis.create');
    }

    public function store(Request $request)
    {
        // Simpan post baru ke database
        $resi = new Resi;
        $resi->no_resi = $request->input('no_resi');
        $resi->nama_pengirim = $request->input('nama_pengirim');
        $resi->alamat_pengirim = $request->input('alamat_pengirim');
        $resi->no_tlp_pengirim = $request->input('no_tlp_pengirim');
        $resi->nama_penerima = $request->input('nama_penerima');
        $resi->alamat_penerima = $request->input('alamat_penerima');
        $resi->no_tlp_penerima = $request->input('no_tlp_penerima');
        $resi->berat = $request->input('berat');
        $resi->jml = $request->input('jml');
        $resi->biaya = $request->input('biaya');
        $resi->isi = $request->input('isi');
        $resi->tanggal = $request->input('tanggal');
        $resi->cod = $request->input('cod');
        $resi->save();

        return redirect()->route('resis.index')->with('success', 'Resi berhasil ditambahkan!');
    }

    public function show($id)
    {
        // Tampilkan detail post berdasarkan ID
        $resi = Resi::find($id);
        $resi->tanggal = Carbon::parse($resi->tanggal);
        return view('resis.show', compact('resi'));
    }

    public function edit($id)
    {
        // Tampilkan formulir untuk mengedit post berdasarkan ID
        $resi = Resi::find($id);
        return view('resis.edit', compact('resi'));
    }

    public function update(Request $request, $id)
    {
        // Perbarui post berdasarkan ID
        $resi = Resi::find($id);
        $resi->no_resi = $request->input('no_resi');
        $resi->nama_pengirim = $request->input('nama_pengirim');
        $resi->alamat_pengirim = $request->input('alamat_pengirim');
        $resi->no_tlp_pengirim = $request->input('no_tlp_pengirim');
        $resi->nama_penerima = $request->input('nama_penerima');
        $resi->alamat_penerima = $request->input('alamat_penerima');
        $resi->no_tlp_penerima = $request->input('no_tlp_penerima');
        $resi->berat = $request->input('berat');
        $resi->jml = $request->input('jml');
        $resi->biaya = $request->input('biaya');
        $resi->isi = $request->input('isi');
        $resi->tanggal = $request->input('tanggal');
        $resi->cod = $request->input('cod');
        $resi->save();

        return redirect()->route('resis.index')->with('success', 'Resi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Hapus post berdasarkan ID
        $resi = Resi::find($id);
        $resi->delete();

        return redirect()->route('resis.index')->with('success', 'Resi berhasil dihapus!');
    }
}
