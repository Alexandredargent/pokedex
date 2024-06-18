@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8">Pokedex Admin</h1>
        <div class="mb-4">
            <form method="GET" action="{{ route('pokedex.guest') }}" class="flex">
                <input type="text" name="search" placeholder="Search Pokémon..." value="{{ request()->query('search') }}" class="border rounded-l py-2 px-3 w-full">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-r">
                    Search
                </button>
            </form>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($pokemons as $pokemon)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-bold mb-4">{{ $pokemon->name }}</h2>
                    <img src="{{ asset('storage/' . $pokemon->image) }}" alt="{{ $pokemon->name }}" class="mb-4 w-full h-auto">
                    <p class="mb-2"><strong class="font-bold">HP:</strong> {{ $pokemon->hp }}</p>
                    <p class="mb-2"><strong class="font-bold">Weight:</strong> {{ $pokemon->weight }} kg</p>
                    <p class="mb-2"><strong class="font-bold">Height:</strong> {{ $pokemon->height }} m</p>
                    <p class="mb-2">
                        <strong class="font-bold">Type(s):</strong>
                        @foreach ($pokemon->types as $type)
                        <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">
                            <img src="{{ asset('storage/' . $type->image) }}" alt="{{ $type->name }}" class="h-4 w-4 inline-block">
                            {{ $type->name }}
                        </span>
                        @endforeach
                    </p>
                    <p>
                        <strong class="font-bold">Attacks:</strong>
                        @foreach ($pokemon->attacks as $attack)
                            @php
                                $type = App\Models\Type::find($attack->type_id);
                            @endphp
                            <div class="bg-gray-200 rounded-lg p-4 mb-4">
                                <h3 class="text-lg font-bold mb-2 flex items-center">
                                    <img src="{{ asset('storage/' . $type->image) }}" alt="{{ $type->name }}" class="h-6 w-6 mr-2">
                                    {{ $attack->name }}
                                </h3>
                                <p class="mb-2"><strong class="font-bold">Description:</strong> {{ $attack->description }}</p>
                                <p class="mb-2"><strong class="font-bold">Power:</strong> {{ $attack->damage }}</p>
                            </div>
                        @endforeach
                    </p>
                    <div class="mt-4 flex justify-end">
                        <a href="{{ route('pokemons.edit', $pokemon->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                        <form action="{{ route('pokemons.destroy', $pokemon->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        </form>
                        
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-8">
            {{ $pokemons->links('vendor.pagination.tailwind') }}
        </div>
    </div>
@endsection
