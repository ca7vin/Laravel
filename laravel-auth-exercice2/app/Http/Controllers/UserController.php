<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function edit($id) {
        $userEdit = User::find($id);
        $roles = Role::all();
        return view('users/users-edit', compact('userEdit', 'roles'));
    }

    public function update($id,Request $request ) {
        $userEdit= User::find($id);
        $userEdit->name = $request->name;
        $userEdit->first_name = $request->first_name;
        $userEdit->age = $request->age;
        $userEdit->adress = $request->adress;
        $userEdit->email = $request->email;
        $userEdit->role_id = $request->role_id;
        $userEdit->updated_at = now();
        $userEdit->save();
        return redirect()->action([TitreController::class, 'index']);
    }
}
