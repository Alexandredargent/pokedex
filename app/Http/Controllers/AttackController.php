<?php

namespace App\Http\Controllers;

use App\Models\Attack;
use Illuminate\Http\Request;

class AttackController extends Controller
{
    public function index()
    {
        $attacks = Attack::all();
        return view('attacks.index', compact('attacks'));
    }

    public function create()
    {
        return view('attacks.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:attacks|max:255',
            // Ajoutez d'autres règles de validation pour les autres champs
        ]);

        Attack::create($validatedData);

        return redirect()->route('attacks.index')
            ->with('success', 'Attaque créée avec succès.');
    }

    // Implémentez les autres méthodes CRUD de manière similaire...
}

