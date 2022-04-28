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
    public function show($id)
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
         'name'=> 'required',
        ]); // update_validated_anchor;
        $role->name = $request->name;
        $role->save(); // update_anchor
        return redirect()->route("roles.index")->with('message', "Role updated with success !");
    }
}
