<?php

namespace App\Http\Controllers;

use App\Models\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    //
    public function index()
    {
        $titles = Title::all();
        return view("/back/titles/all",compact("titles"));
    }
    public function create()
    {
        return view("/back/titles/create");
    }
    public function store(Request $request)
    {
        $title = new Title;
        $request->validate([
            'petit'=> 'required',
            'grand'=> 'required',
            'grand2'=> 'required',
            'description'=> 'required',
        ]); // store_validated_anchor;
        $title->petit = $request->petit;
        $title->grand = $request->grand;
        $title->grand2 = $request->grand2;
        $title->description = $request->description;
        $title->save(); // store_anchor
        return redirect()->route("titles.index")->with("message", "Title created with success !");
    }
    public function show($id)
    {
        $title = Title::find($id);
        return view("/back/titles/show",compact("title"));
    }
    public function edit($id)
    {
        $title = Title::find($id);
        return view("/back/titles/edit",compact("title"));
    }
    public function update($id, Request $request)
    {
        $title = Title::find($id);
        $request->validate([
            'petit'=> 'required',
            'grand'=> 'required',
            'grand2'=> 'required',
            'description'=> 'required',
        ]); // update_validated_anchor;
        $title->petit = $request->petit;
        $title->grand = $request->grand;
        $title->grand2 = $request->grand2;
        $title->description = $request->description;
        $title->save(); // update_anchor
        return redirect()->route("titles.index")->with("message", "Title edited with success !");
    }
    public function destroy($id)
    {
        $title = Title::find($id);
        $title->delete();
        return redirect()->back()->with("message", "Successful delete !");
    }
}
