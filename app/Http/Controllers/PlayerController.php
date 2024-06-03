<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();
        return view('players.index', compact('players'));
    }

    public function create()
    {
        return view('players.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'position' => 'required',
            'team' => 'required',
            'image_url' => 'nullable|url',
        ]);

        try {
            Player::create($request->all());
            return redirect()->route('players.index')->with('success', 'Player created successfully.');
        } catch (\Exception $e) {
            Log::error('Failed to create player: ' . $e->getMessage());
            return redirect()->route('players.create')->with('error', 'Failed to create player. Please try again.');
        }
    }

    public function show(Player $player)
    {
        return view('players.show', compact('player'));
    }

    public function edit(Player $player)
    {
        return view('players.edit', compact('player'));
    }

    public function update(Request $request, Player $player)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer',
            'position' => 'required',
            'team' => 'required',
            'image_url' => 'nullable|url',
        ]);

        $player->update($request->all());
        return redirect()->route('players.index')->with('success', 'Player updated successfully.');
    }

    public function destroy(Player $player)
    {
        $player->delete();
        return redirect()->route('players.index')->with('success', 'Player deleted successfully.');
    }
}
