@extends('layouts.app')

@section('content')
    <h1>Pokémons</h1>
    <a href="{{ route('pokemons.create') }}">Créer un Pokémon</a>
    <ul>
        @foreach($pokemons as $pokemon)
            <li>
                {{ $pokemon->name }}
                <a href="{{ route('pokemons.edit', $pokemon) }}">Modifier</a>
                <form action="{{ route('pokemons.destroy', $pokemon) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
