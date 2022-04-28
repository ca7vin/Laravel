<?php

namespace App\Http\Controllers;

use App\Models\Map;
use Illuminate\Http\Request;

class MapController extends Controller
{
    //
    public function index()
    {
        $maps = Map::all();
        return view("/back/maps/all",compact("maps"));
    }
    public function create()
    {
        return view("/back/maps/create");
    }
    public function store(Request $request)
    {
        $map = new Map;
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'message'=> 'required',
            'phone'=> 'required|Min:6|Max:10',
            'address'=> 'required',
        ]); // store_validated_anchor;
        $map->name = $request->name;
        $map->email = $request->email;
        $map->message = $request->message;
        $map->phone = $request->phone;
        $map->address = $request->address;
        $map->save(); // store_anchor
        return redirect()->route("map.index")->with("message", "Successful storage !");
    }
    public function show($id)
    {
        $map = Map::find($id);
        return view("/back/maps/show",compact("map"));
    }
    public function edit($id)
    {
        $map = Map::find($id);
        return view("/back/maps/edit",compact("map"));
    }
    public function update($id, Request $request)
    {
        $map = Map::find($id);
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'message'=> 'required',
            'phone'=> 'required|Min:6|Max:10',
            'address'=> 'required',
        ]); // update_validated_anchor;
        $map->name = $request->name;
        $map->email = $request->email;
        $map->message = $request->message;
        $map->phone = $request->phone;
        $map->address = $request->address;
        $map->save(); // update_anchor
        return redirect()->route("map.index")->with("message", "Successful update !");
    }
    public function destroy($id)
    {
        $map = Map::find($id);
        $map->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
}
