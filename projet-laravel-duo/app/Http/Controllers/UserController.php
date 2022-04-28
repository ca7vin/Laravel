<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view("/back/users/all",compact("users"));
    }
    public function create()
    {
        $user = User::all();
        $roles = Role::all();
        return view("/back/users/create", compact('user', 'roles'));
    }
    public function store(Request $request)
    {
        $user = new User;
        $request->validate([
         'name'=> 'required',
         'email'=> 'required',
         'password'=> 'required',
        ]); // store_validated_anchor;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = 3;
        $user->save(); // store_anchor
        return redirect()->route("users.index")->with('message', "User created with success !");
    }
    public function show($id)
    {
        $user = User::find($id);
        return view("/back/users/read",compact("user"));
    }
    public function edit($id)
    {
        $user = User::find($id);
        $users = User::all();
        $roles = Role::all();
        return view("/back/users/edit",compact("user","users", "roles"));
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'role_id'=> 'required',
        ]); // update_validated_anchor;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->save(); // store_anchor
        return redirect()->route("users.index")->with('message', "User edited with success !");
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
