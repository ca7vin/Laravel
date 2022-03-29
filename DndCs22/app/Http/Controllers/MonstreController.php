<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MonstreController extends Controller
{
    public function index()
    {
        $monstres = Http::get('https://api.open5e.com/monsters/?page=1')['results'];
        return view("front/pages/monstres",compact('monstres'));
    } 

    function loadMore()
    {
        $monstres = Http::get('https://api.open5e.com/monsters/?page=1')['next'];
        return view("front/pages/monstres",compact('monstres'));
    }
}
