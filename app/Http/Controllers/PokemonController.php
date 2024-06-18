<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Type;
use App\Models\Attack;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        $pokemons = Pokemon::all();
        return view('pokemons.index', compact('pokemons'));
    }

    public function create()
    {
        $types = Type::all();
        $attacks = Attack::all();
        return view('pokemons.create', compact('types', 'attacks'));
    }

    public function store(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'hp' => 'required|numeric',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'image' => 'required|image|max:2048', // Assuming you want to upload an image
            'types' => 'required|array',
            'types.*' => 'exists:types,id',
            'attacks' => 'required|array',
            'attacks.*' => 'exists:attacks,id',
        ]);
    
         // Handle the image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = 'pokemons/' . $image->getClientOriginalName();
        $imagePath = $image->storeAs('public/pokemon_images', $imageName, 'public');
        $validatedData['image'] = 'pokemon_images/' . $imageName;
    }
        
    
        // Create the new Pokemon
        $pokemon = Pokemon::create($validatedData);
    
        // Attach the selected types and attacks
        $pokemon->types()->attach($request->input('types'));
        $pokemon->attacks()->attach($request->input('attacks'));
    
        return redirect()->route('pokedex.admin')->with('success', 'Pokemon created successfully.');
    }

    public function show(Pokemon $pokemon)
    {
        return view('pokemons.show', compact('pokemon'));
    }

    public function edit(Pokemon $pokemon)
{
    $types = Type::all();
    $attacks = Attack::all();
    return view('pokemons.edit', compact('pokemon', 'types', 'attacks'));
}

   
public function update(Request $request, Pokemon $pokemon)
{
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'hp' => 'required|numeric',
        'weight' => 'required|numeric',
        'height' => 'required|numeric',
        'image' => 'nullable|image|max:2048',
        'types' => 'required|array',
        'types.*' => 'exists:types,id',
        'attacks' => 'required|array',
        'attacks.*' => 'exists:attacks,id',
    ]);

         // Handle the image upload
         if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = 'pokemons/' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/pokemon_images', $imageName, 'public');
            $validatedData['image'] = 'pokemon_images/' . $imageName;
        }

    $pokemon->update($validatedData);

    $pokemon->types()->sync($request->input('types'));
    $pokemon->attacks()->sync($request->input('attacks'));

    return redirect()->route('pokedex.admin')->with('success', 'Pokemon updated successfully.');
}

    public function destroy(Pokemon $pokemon)
    {
    $pokemon->delete();
    return redirect()->route('pokedex.admin')->with('success', 'Pokemon deleted successfully.');
    }

}

