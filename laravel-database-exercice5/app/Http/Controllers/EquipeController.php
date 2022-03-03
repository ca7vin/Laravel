<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipeController extends Controller
{
    function index() {
        $data = DB::table('equipes')->get();
        return view('pages/equipe',['data' => $data]);
    }
}
