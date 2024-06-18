<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attaque extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'image', 'degats', 'description', 'pokemon_id', 'type_id'];

    public function pokemons()
    {
        return $this->belongsToMany(Pokemon::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}


