<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index()
    {
        $profiles = Profile::all();
        return view("/back/profiles/all",compact("profiles"));
    }
    public function create()
    {
        return view("/back/profiles/create");
    }
    public function store(Request $request)
    {
        $profile = new Profile;
        $request->validate([
         'name'=> 'required',
         'age'=> 'required',
         'phone'=> 'required',
         'user_id'=> 'required',
        ]); // store_validated_anchor;
        $profile->name = $request->name;
        $profile->age = $request->age;
        $profile->phone = $request->phone;
        $profile->user_id = $request->user_id;
        $profile->save(); // store_anchor
        return redirect()->route("profile.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $profile = Profile::find($id);
        return view("/back/profiles/read",compact("profile"));
    }
    public function edit($id)
    {
        $profile = Profile::find($id);
        return view("/back/profiles/edit",compact("profile"));
    }
    public function update($id, Request $request)
    {
        $profile = Profile::find($id);
        $request->validate([
         'name'=> 'required',
         'age'=> 'required',
         'phone'=> 'required',
         'user_id'=> 'required',
        ]); // update_validated_anchor;
        $profile->name = $request->name;
        $profile->age = $request->age;
        $profile->phone = $request->phone;
        $profile->user_id = $request->user_id;
        $profile->save(); // update_anchor
        return redirect()->route("profile.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
