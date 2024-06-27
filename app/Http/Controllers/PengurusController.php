<?php

namespace App\Http\Controllers;

use App\Models\Pengurus;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    // Metode CRUD

    // Menampilkan semua data pengurus
    public function index()
    {
        $pengurus = Pengurus::all();
        return view('admin.datapeng', compact('pengurus'));
    }

    // Menampilkan form untuk menambah data pengurus
    public function create()
    {
         return view('admin.create_pengurus');
    }

// Menyimpan data pengurus yang baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jabatan' => 'required|string|max:255',
            'kontak' => 'required|string|max:255', // Sesuaikan dengan validasi kontak yang diinginkan
        ]);

        // Menggunakan only untuk menghindari masalah keamanan
        Pengurus::create($request->only(['nama', 'jabatan', 'kontak']));

        return redirect()->route('pengurus.index')
                        ->with('success', 'Pengurus created successfully.');
    }


    // Menampilkan detail dari satu pengurus
    public function show($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        return view('admin.show_pengurus', compact('pengurus'));
    }

    // Menampilkan form untuk mengedit data pengurus
  public function edit($id)
    {
        
        $pengurus = Pengurus::findOrFail($id); // Ambil data Pengurus berdasarkan ID
        return view('admin.edit_pengurus', compact('pengurus'));}

    // Memperbarui data pengurus yang telah diedit
    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'jabatan' => 'required',
        'kontak' => 'required',
    ]);

    $pengurus = Pengurus::findOrFail($id);
    $pengurus->nama = $request->nama;
    $pengurus->jabatan = $request->jabatan;
    $pengurus->kontak = $request->kontak;
    $pengurus->save();
    

    return redirect()->route('pengurus.index')
                     ->with('success', 'Pengurus updated successfully.');
}


    // Menghapus data pengurus
    public function destroy($id)
    {
        $pengurus = Pengurus::findOrFail($id);
        $pengurus->delete();
        return redirect()->route('pengurus.index')
                         ->with('success', 'Pengurus deleted successfully.');
    }
}
