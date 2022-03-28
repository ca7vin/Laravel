<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function index()
    {
        $roles = Role::all();
        return view("/back/roles/all",compact("roles"));
    }
    public function create()
    {
        return view("/back/roles/create");
    }
    public function store(Request $request)
    {
        $role = new Role;
        $request->validate([
         'nom'=> 'required',
        ]); // store_validated_anchor;
        $role->nom = $request->nom;
        $role->save(); // store_anchor
        return redirect()->route("role.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $role = Role::find($id);
        return view("/back/roles/read",compact("role"));
    }
    public function edit($id)
    {
        $role = Role::find($id);
        return view("/back/roles/edit",compact("role"));
    }
    public function update($id, Request $request)
    {
        $role = Role::find($id);
        $request->validate([
         'nom'=> 'required',
        ]); // update_validated_anchor;
        $role->nom = $request->nom;
        $role->save(); // update_anchor
        return redirect()->route("role.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
