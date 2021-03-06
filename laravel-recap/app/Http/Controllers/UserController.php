<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

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
        if (! Gate::allows('create-user')) {
            abort(403);
        }
        return view('/back/users/create', compact('roles'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $this->authorize('create', User::class);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $user->roles()->attach($request->roles, [
            'user_id' => $user->id,
        ]);
        return redirect('/back/users')->with('success', 'User created successfully');
    }

    public function edit($id)
    {
        $roles=Role::all();
        $user = User::find($id);
        if (! Gate::allows('update-user')) {
            abort(403);
        }
        return view("/back/users/edit", compact('user', 'roles'));
    }

    public function update($id, Request $request)
    {
        $user = User::find($id);
        $this->authorize('update', $user);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'password' => 'required|min:8',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        if ($user->password === $request->password) {
            $user->password = $user->password;
        } else {
            $user->password = Hash::make($request->password);
        }
        if ($request->roles === null) {
            $user->roles()->sync(3, [
                'user_id' => $user->id,
            ]);
        } else {
            $user->roles()->sync($request->roles, [
                'user_id' => $user->id,
            ]);
        }
        $user->save();
        return redirect()->route("users.index")->with('message', "Successful update !");
    }

    public function show($id)
    {
        $user = User::find($id);
        return view("/back/users/read", compact('user'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $this->authorize('delete', $user);
        if ($user->id === Auth::user()->id) {
            return redirect()->route("users.index")->with('error', "You cannot delete your own account !");
        } else {
            $user->delete();
            return redirect()->route("users.index")->with('message', "Successful delete !");
        }
    }
}