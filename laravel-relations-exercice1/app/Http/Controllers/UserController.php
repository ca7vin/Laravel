<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view("/back/users/all",compact("users"));
    }
    public function create()
    {
        $roles = Role::all();
        return view("/back/users/create", compact("roles"));
    }
    public function store(Request $request)
    {
        $user = new User;
        $request->validate([
         'nom'=> 'required',
         'prenomo'=> 'required',
         'age'=> 'required',
         'email'=> 'required',
         'mdp'=> 'required',
         'naissance'=> 'required',
         'genre'=> 'required',
        ]); // store_validated_anchor;
        $user->nom = $request->nom;
        $user->prenomo = $request->prenomo;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = $request->mdp;
        $user->naissance = $request->naissance;
        $user->genre = $request->genre;
        $user->save(); // store_anchor
        return redirect()->route("user.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $user = User::find($id);
        return view("/back/users/read",compact("user"));
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view("/back/users/edit",compact("user"));
    }
    public function update($id, Request $request)
    {
        $user = User::find($id);
        $request->validate([
         'nom'=> 'required',
         'prenomo'=> 'required',
         'age'=> 'required',
         'email'=> 'required',
         'mdp'=> 'required',
         'naissance'=> 'required',
         'genre'=> 'required',
        ]); // update_validated_anchor;
        $user->nom = $request->nom;
        $user->prenomo = $request->prenomo;
        $user->age = $request->age;
        $user->email = $request->email;
        $user->mdp = $request->mdp;
        $user->naissance = $request->naissance;
        $user->genre = $request->genre;
        $user->save(); // update_anchor
        return redirect()->route("user.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
