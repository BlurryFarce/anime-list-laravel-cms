<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Anime;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();
        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $animes = Anime::all();
        return view('characters.create', compact('animes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'anime_id' => 'required|exists:animes,id',
            'image_url' => 'nullable|url',
            'gender' => 'nullable|string',
            'age' => 'nullable|integer'
        ]);

        Character::create($request->all());
        return redirect()->route('characters.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $character = Character::findOrFail($id);
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $character = Character::findOrFail($id);
        $animes = Anime::all();
        return view('characters.edit', compact('character', 'animes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'anime_id' => 'required|exists:animes,id',
            'image_url' => 'nullable|url',
            'gender' => 'nullable|string',
            'age' => 'nullable|integer'
        ]);

        $character = Character::findOrFail($id);
        $character->update($request->all());
        return redirect()->route('characters.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $character = Character::findOrFail($id);
        $character->delete();
        return redirect()->route('characters.index');
    }
}
