<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    function index() {
        $data = DB::table('articles')->get();
        return view('pages/article',['data' => $data]);
    }
}
