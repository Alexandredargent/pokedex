@extends('layouts.app')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-4xl font-bold mb-8">Edit Pokemon</h1>

        <form action="{{ route('pokemons.update', $pokemon->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                <input type="text" name="name" id="name" value="{{ $pokemon->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="hp" class="block text-gray-700 font-bold mb-2">HP</label>
                <input type="number" name="hp" id="hp" value="{{ $pokemon->hp }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="weight" class="block text-gray-700 font-bold mb-2">Weight</label>
                <input type="number" name="weight" id="weight" value="{{ $pokemon->weight }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="height" class="block text-gray-700 font-bold mb-2">Height</label>
                <input type="number" name="height" id="height" value="{{ $pokemon->height }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-bold mb-2">Image</label>
                <input type="file" name="image" id="image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
                <label for="types" class="block text-gray-700 font-bold mb-2">Types</label>
                @foreach($types as $type)
                    <div class="flex items-center mb-2">
                        <input type="checkbox" name="types[]" value="{{ $type->id }}" id="type-{{ $type->id }}" class="mr-2" @if($pokemon->types->contains($type->id)) checked @endif>
                        <label for="type-{{ $type->id }}" class="text-gray-700">{{ $type->name }}</label>
                    </div>
                @endforeach
            </div>

            <div class="mb-4">
                <label for="attacks" class="block text-gray-700 font-bold mb-2">Attacks</label>
                @foreach($attacks as $attack)
                    <div class="flex items-center mb-2">
                        <input type="checkbox" name="attacks[]" value="{{ $attack->id }}" id="attack-{{ $attack->id }}" class="mr-2" @if($pokemon->attacks->contains($attack->id)) checked @endif>
                        <label for="attack-{{ $attack->id }}" class="text-gray-700">{{ $attack->name }}</label>
                    </div>
                @endforeach
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update Pokemon
                </button>
            </div>
        </form>
    </div>
@endsection
