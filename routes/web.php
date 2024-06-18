<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\PokedexController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\AttackController;
use App\Http\Livewire\Pokedex; // Ensure this is correctly imported


// pokedex for guests (not logged in)
Route::get('/', [PokedexController::class, 'guestIndex'])->name('pokedex.guest');
/*Route::get('/', function () {
    return view('welcome');
 });
 */
// Add other routes for editing and deleting Pokemon entries

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/pokedex/admin', [PokedexController::class, 'adminIndex'])->name('pokedex.admin') ;  
    //Route::get('/pokedex', [PokedexController::class, 'index'])->name('pokedex');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Pokemon routes
    Route::resource('pokemons', PokemonController::class);
    Route::get('/pokemons/create', [PokemonController::class, 'create'])->name('pokemons.create');
    Route::post('/pokemons', [PokemonController::class, 'store'])->name('pokemons.store');
    Route::put('/pokemons/{pokemon}', [PokemonController::class, 'update'])->name('pokemons.update');
    Route::get('/pokemons/{pokemon}/edit', [PokemonController::class, 'edit'])->name('pokemons.edit');

    
});

require __DIR__.'/auth.php';