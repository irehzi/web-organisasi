<?php

namespace App\Http\Controllers;

use App\Models\Proker;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    public function index()
    {
        $prokers = Proker::all();
        return view('proker.index', compact('prokers'));
    }

    public function create()
    {
        return view('proker.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_proker' => 'required',
            'tanggal' => 'required|date',
            'tempat' => 'required',
            'email' => 'required|email',
            'penyelenggara' => 'required',
            'deskripsi' => 'required',
        ]);

        Proker::create($request->all());
        return redirect()->route('proker.index')->with('success', 'Proker created successfully.');
    }

    public function show(Proker $proker)
    {
        return view('proker.show', compact('proker'));
    }

    public function edit(Proker $proker)
    {
        return view('proker.edit', compact('proker'));
    }

    public function update(Request $request, Proker $proker)
    {
        $request->validate([
            'nama_proker' => 'required',
            'tanggal' => 'required|date',
            'tempat' => 'required',
            'email' => 'required|email',
            'penyelenggara' => 'required',
            'deskripsi' => 'required',
        ]);

        $proker->update($request->all());
        return redirect()->route('proker.index')->with('success', 'Proker updated successfully.');
    }

    public function destroy(Proker $proker)
    {
        $proker->delete();
        return redirect()->route('proker.index')->with('success', 'Proker deleted successfully.');
    }
}

