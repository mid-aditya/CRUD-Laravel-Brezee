<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function index()
    {
        $game = Game::all();
        return view('game.index', compact('game'));
    }

    public function create()
    {
        return view('game.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'link' => 'required',
        ]);

        Game::create($request->all());

        return redirect()->route('game.index')
                         ->with('success', 'game Video created successfully.');
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('game.show', compact('game'));
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('game.edit', compact('game'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required',
            'link' => 'required',
        ]);

        $game = Game::findOrFail($id);
        $game->update($request->all());

        return redirect()->route('game.index')
                         ->with('success', 'game Video updated successfully');
    }

    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect()->route('game.index')
                         ->with('success', 'game Video deleted successfully');
    }
}
