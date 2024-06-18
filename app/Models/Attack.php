<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attack extends Model
{
    use HasFactory;
    protected $table = 'attacks';

    protected $fillable = ['name', 'image', 'damage', 'description', 'type_id'];

    public function pokemon()
    {
        return $this->belongsToMany(Pokemon::class);
    }

    public function types()
    {
        return $this->belongsTo(Type::class);
    }
}

