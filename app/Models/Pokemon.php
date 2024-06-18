<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'img_path', 'pointsDeVie', 'poids', 'taille'];

    public function types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function attaques()
    {
        return $this->belongsToMany(Attaque::class);
    }
}
