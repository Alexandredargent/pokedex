<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('types.index', compact('types'));
    }

    public function create()
    {
        return view('types.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:types|max:255',
            // Ajoutez d'autres règles de validation pour les autres champs
        ]);

        Type::create($validatedData);

        return redirect()->route('types.index')
            ->with('success', 'Type créé avec succès.');
    }

    // Implémentez les autres méthodes CRUD de manière similaire...
}

