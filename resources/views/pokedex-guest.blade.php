@extends('layouts.pokedex-guest-layout')

@section('content')
    <div class="container mx-auto px-4 py-8">
        {{-- Add authentication links here --}}
        @if (Route::has('login'))
            <nav class="mb-8">
                @auth
                    <a
                        href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Dashboard
                    </a>
                @else
                    <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a
                            href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
         
        <h1 class="text-4xl font-bold mb-8">Pokedex</h1>
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
                    
                </div>
            @endforeach
        </div>
        <div class="mt-8">
            {{ $pokemons->links('vendor.pagination.tailwind') }}
        </div>
    </div>
@endsection

