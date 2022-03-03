<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index() {
        $data = DB::table('users')->get();
        return view('pages/user',['data' => $data]);
    }
}
