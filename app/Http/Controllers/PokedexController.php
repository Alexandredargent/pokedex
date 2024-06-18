<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Type;
use App\Models\Attack;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function guestIndex(Request $request)
    {
        $search = $request->query('search');
        $typeFilter = $request->query('type');
        $attackFilter = $request->query('attack');

        $pokemons = Pokemon::with('types', 'attacks')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->when($typeFilter, function ($query, $typeFilter) {
                return $query->whereHas('types', function ($query) use ($typeFilter) {
                    $query->where('name', $typeFilter);
                });
            })
            ->when($attackFilter, function ($query, $attackFilter) {
                return $query->whereHas('attacks', function ($query) use ($attackFilter) {
                    $query->where('name', $attackFilter);
                });
            })
            ->paginate(10);

        $types = Type::all();
        $attacks = Attack::all();

        return view('pokedex-guest', compact('pokemons', 'types', 'attacks'));
    }

    public function adminIndex(Request $request)
    {
        $search = $request->query('search');
        $typeFilter = $request->query('type');
        $attackFilter = $request->query('attack');

        $pokemons = Pokemon::with('types', 'attacks')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%');
            })
            ->when($typeFilter, function ($query, $typeFilter) {
                return $query->whereHas('types', function ($query) use ($typeFilter) {
                    $query->where('name', $typeFilter);
                });
            })
            ->when($attackFilter, function ($query, $attackFilter) {
                return $query->whereHas('attacks', function ($query) use ($attackFilter) {
                    $query->where('name', $attackFilter);
                });
            })
            ->paginate(10);

        $types = Type::all();
        $attacks = Attack::all();

        return view('pokedex-admin', compact('pokemons', 'types', 'attacks'));
    }


   





}
