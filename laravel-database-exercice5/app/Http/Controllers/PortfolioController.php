<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PortfolioController extends Controller
{
    function index() {
        $data = DB::table('portfolios')->get();
        return view('pages/portfolio',['data' => $data]);
    }
}
