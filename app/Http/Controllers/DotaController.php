<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dota;

class DotaController extends Controller
{
    public function index()
    {
        $dota = Dota::all();
        return view('dota.index', compact('dota'));
    }

    public function create()
    {
        return view('dota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'link' => 'required',
        ]);

        Dota::create($request->all());

        return redirect()->route('dota.index')
                         ->with('success', 'Dota Video created successfully.');
    }

    public function show($id)
    {
        $dota = Dota::findOrFail($id);
        return view('dota.show', compact('dota'));
    }

    public function edit($id)
    {
        $dota = Dota::findOrFail($id);
        return view('dota.edit', compact('dota'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'link' => 'required',
        ]);

        $dota = Dota::findOrFail($id);
        $dota->update($request->all());

        return redirect()->route('dota.index')
                         ->with('success', 'Dota Video updated successfully');
    }

    public function destroy($id)
    {
        $dota = Dota::findOrFail($id);
        $dota->delete();

        return redirect()->route('dota.index')
                         ->with('success', 'Dota Video deleted successfully');
    }
}
