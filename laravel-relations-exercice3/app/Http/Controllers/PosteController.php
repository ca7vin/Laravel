<?php

namespace App\Http\Controllers;

use App\Models\Poste;
use Illuminate\Http\Request;

class PosteController extends Controller
{
    //
    public function index()
    {
        $postes = Poste::all();
        return view("/back/postes/all",compact("postes"));
    }
}
