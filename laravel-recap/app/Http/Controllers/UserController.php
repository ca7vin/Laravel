<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('/back/users/all', compact('users'));
    }

    public function create()
    {
        $roles=Role::all();
        return view('/back/users/create', compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role_id' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->role_id = $request->role_id;
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view("/back/users/edit", compact('user'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view("/back/users/read", compact('user'));
    }
}
