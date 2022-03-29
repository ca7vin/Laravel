<?php

namespace App\Http\Controllers;

use App\Models\Profile;
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
        return view("/back/users/create");
    }
    public function store(Request $request)
    {
        $user = new User;
        $profile = new Profile;
        $request->validate([
         'email'=> 'required',
         'nickname'=> 'required',
        ]); // store_validated_anchor;
        $user->email = $request->email;
        $user->nickname = $request->nickname;
        $user->save(); // store_anchor
        $profile->name = $request->name;
        $profile->age = $request->age;
        $profile->phone = $request->phone;
        $profile->user_id = $user->id;
        $profile->save();
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
         'email'=> 'required',
         'nickname'=> 'required',
        ]); // update_validated_anchor;
        $user->email = $request->email;
        $user->nickname = $request->nickname;
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
