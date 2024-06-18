<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pokemon;

class Pokedex extends Component
{
    public $pokemons;

    public function mount()
    {
        $this->loadPokemons();
    }

    public function loadPokemons()
{
    try {
        $this->pokemons = Pokemon::with('types')->paginate(10);
    } catch (\Exception $e) {
        // Handle error gracefully
        report($e); // Log the exception
    }
}


    public function render()
{
    return view('livewire.pokedex', ['pokemons' => $this->pokemons])->layout('layouts.app');
}


}
