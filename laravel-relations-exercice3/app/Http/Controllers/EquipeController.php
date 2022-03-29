<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    //
    public function index()
    {
        $equipes = Equipe::all();
        return view("/back/equipes/all",compact("equipes"));
    }
    public function create()
    {
        return view("/back/equipes/create");
    }
    public function store(Request $request)
    {
        $equipe = new Equipe;
        $request->validate([
         'nom'=> 'required',
         'ville'=> 'required',
         'pays'=> 'required',
         'effectif'=> 'required',
        ]); // store_validated_anchor;
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->effectif = $request->effectif;
        $equipe->save(); // store_anchor
        return redirect()->route("equipe.index")->with('message', "Successful storage !");
    }
    public function read($id)
    {
        $equipe = Equipe::find($id);
        return view("/back/equipes/read",compact("equipe"));
    }
    public function edit($id)
    {
        $equipe = Equipe::find($id);
        return view("/back/equipes/edit",compact("equipe"));
    }
    public function update($id, Request $request)
    {
        $equipe = Equipe::find($id);
        $request->validate([
         'nom'=> 'required',
         'ville'=> 'required',
         'pays'=> 'required',
         'effectif'=> 'required',
        ]); // update_validated_anchor;
        $equipe->nom = $request->nom;
        $equipe->ville = $request->ville;
        $equipe->pays = $request->pays;
        $equipe->effectif = $request->effectif;
        $equipe->save(); // update_anchor
        return redirect()->route("equipe.index")->with('message', "Successful update !");
    }
    public function destroy($id)
    {
        $equipe = Equipe::find($id);
        $equipe->delete();
        return redirect()->back()->with('message', "Successful delete !");
    }
}
