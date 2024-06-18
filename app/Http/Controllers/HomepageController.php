<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $pokemon = Pokemon::take(6)->get();

        return view('homepage.index', [
            'pokemon' => $pokemon,
        ]);
    }
}
