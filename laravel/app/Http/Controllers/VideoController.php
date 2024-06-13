<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    // Menampilkan semua data game
    public function index()
    {
        $games = Video::all();
        return view('Video', compact('games'));
    }

    // Menampilkan form untuk membuat data baru
    public function create()
    {
        return view('Video.create');
    }

    // Menyimpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'video' => 'required|integer',
            'judul' => 'required|max:100',
            'gambar' => 'required|max:100',
            'link' => 'required|max:100',
        ]);

        Video::create($request->all());

        return redirect()->route('Video.index')
            ->with('success', 'Game berhasil ditambahkan.');
    }

    // Menampilkan data game berdasarkan ID
    public function show($id)
    {
        $game = Video::findOrFail($id);
        return view('Video.show', compact('game'));
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        $game = Video::findOrFail($id);
        return view('Video.edit', compact('game'));
    }

    // Memperbarui data dalam database
    public function update(Request $request, $id)
    {
        $request->validate([
            'video' => 'required|integer',
            'judul' => 'required|max:100',
            'gambar' => 'required|max:100',
            'link' => 'required|max:100',
        ]);

        $game = Video::findOrFail($id);
        $game->update($request->all());

        return redirect()->route('Video.index')
            ->with('success', 'Game berhasil diperbarui.');
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        $game = Video::findOrFail($id);
        $game->delete();

        return redirect()->route('Video.index')
            ->with('success', 'Game berhasil dihapus.');
    }
}
