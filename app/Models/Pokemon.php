<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    protected $table = 'pokemons';

    protected $fillable = ['name','image', 'hp', 'weight', 'height'];

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function attacks()
    {
        return $this->belongsToMany(Attack::class);
    }
}

